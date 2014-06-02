<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$object = new master;
	
	$count = $object->getCount("school_details");
	$pagination = $object->pagination($count,10);
	$limit = $pagination['limit'];
	if(!empty($_REQUEST['column'])) {
		$column = $_REQUEST['column'];
	}
	
	if(!empty($_REQUEST['order'])) {
		$order = $_REQUEST['order'];
	}
	
	if(isset($_REQUEST['filter'])) {
	$filter = $_REQUEST['filter'];
	}
	//echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$schoolList = $object->getSchoolList($filter,$column,$order,$limit);
?>
<?php require_once("school_filter.php");?>
<table align="center" border="2" width="60%">
	<tr>
    	<td colspan="9" class="school_list">
        	<a href="add_school.php">
            	Add New School
            </a>
        </td>
    </tr>
	<tr>
    	<th class="school_list">Sr</th>
        <th class="school_list">
         <?php
		if(isset($_REQUEST['pn'])) {
			$page = "&pn=".$_REQUEST['pn'];
		}
		else {
			$page = "";
		}
		?>
       <span> <a href="school_list.php?column=school_name&order=asc<?php echo $page;?>">
        	<img src="images/asc.png" width="20" height="15" />
        </a>
        </span>
        School Name
       
         <a href="school_list.php?column=school_name&order=desc<?php echo $page;?>">
        		<img src="images/desc.png" width="20" height="15" />
        </a>
        </th>
        <th class="school_list">Contact Person</th>
        <th class="school_list">Contact Number</th>
         <th class="school_list">Terms</th>
        <th class="school_list">Set Price</th>
        <th class="school_list">View Details</th>
        <th class="school_list">Edit Details</th>
        <th class="school_list">Delete School</th>
    </tr>
    <?php
		$sr=1;
		foreach($schoolList as $key => $value) {
		?>
		<tr>
            <td class="school_list"><?php echo $sr;?></td>
            <td class="school_list"><?php echo $value[1];?></td>
            <td class="school_list"><?php echo $value[2];?></td>
            <td class="school_list"><?php echo $value[3];?></td>
            <td>
            <?php
            	$sid = $value[0];
            	$query = "SELECT distinct(student_term) FROM student_details WHERE school_id = '$sid'";
            	$school_terms = $object->getTermForSchool($sid);
            	foreach($school_terms  as $tvalue)
            	{
            		echo $tvalue;
            	}
            ?>
            </td>
            <td class="school_list">
				<a href="school_price.php?id=<?php echo $value[0];?>">
                	Set Price
                </a>
			</td>
            <td class="school_list">
				<a href="school_details.php?id=<?php echo $value[0];?>">
                	More
                </a>
			</td>
             <td class="school_list">
				<a href="school_edit.php?id=<?php echo $value[0];?>">
                	Edit
                </a>
			</td>
            <td class="school_list">
				<a href="school_delete.php?id=<?php echo $value[0];?>">
                	Delete
                </a>
			</td>
	    </tr>
       <?php
	   $sr++;
		}
	?>
    <tr>
    	<td colspan="9" align="center">
        	<?php echo $pagination['paginationDisplay'];?>
        </td>
    </tr>
    	
</table>