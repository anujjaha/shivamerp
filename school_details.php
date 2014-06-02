<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$object = new master;
	$id = $_REQUEST['id'];
	$schoolDetails = $object->getSingleShool($id);
?>
<table align="center" border="2" width="90%">
	<tr>
    	<td colspan="2" align="center">
        	<h1> School Details </h1>
        </td>
    </tr>
<tr>
    	<td align="right" class="add_school" width="50%">
        	School Name :
        </td>	
        <td width="50%">
        	<?php echo $schoolDetails['school_name'];?>
        </td>	
    </tr>
    <tr>
    	<td align="right" class="add_school">
        	Contact Person Name :
        </td>	
        <td>
        	<?php echo $schoolDetails['person_name'];?>
        </td>	
    </tr>
    <tr>
    	<td align="right" class="add_school">
        	School Address :
        </td>	
        <td>
        	<?php echo $schoolDetails['address'];?>
        </td>	
    </tr>
    <tr>
    	<td align="right" class="add_school">
        	School Contact Number :
        </td>	
        <td>
        	<?php echo $schoolDetails['contact_number'];?>
        </td>	
    </tr>
    
    <tr>
    	<td align="right" class="add_school">
        	School Other Contact Number :
        </td>	
        <td>
        	<?php echo $schoolDetails['other_contact'];?>
        </td>	
    </tr>
    
    <tr>
    	<td align="right" class="add_school">
        	Email Id :
        </td>	
        <td>
        	<?php echo $schoolDetails['emailid'];?>
        </td>	
    </tr>
</table>
<?php
$rateData = $object->getSchoolRate($id);
?>
<table align="center" border="2" width="90%">
	<tr>
    	<td colspan="9" align="center">
        	<h2>School Rate for : <?php echo $schoolDetails['school_name'];?></h2>
        </td>
    </tr>
    <tr>
    	<th align="center"> Sr. </th>
        <th align="center"> Term </th>
        <th align="center"> Boys ( 1-4 Std) </th>
        <th align="center"> Girls ( 1-4 Std) </th>
        <th align="center"> Boys ( 5-8 Std) </th>
        <th align="center"> Girls ( 5-8 Std) </th>
        <th align="center"> Boys ( 9-12 Std) </th>
        <th align="center"> Girls ( 9-12 Std) </th>
        <th align="center"> Delete </th>
    </tr>
    <?php
	$srr = 1;
	foreach($rateData as $rkey => $value ) {
	?>
    <tr>
    	<td> <?php echo $srr;?> </td>
        <td> <?php echo $value[0];?> </td>
        <td> <?php echo $value[1];?> </td>
        <td> <?php echo $value[4];?> </td>
        <td> <?php echo $value[2];?> </td>
        <td> <?php echo $value[5];?> </td>
        <td> <?php echo $value[3];?> </td>
        <td> <?php echo $value[6];?> </td>
        <td>
        	<a href="school_details.php?id=<?php echo $id;?>&rateid=<?php echo $value[7];?>">
            Delete
            </a>
        </td>
    </tr>
    <?php
	$srr++;
	}
	?>
</table>
<?php
if(isset($_GET['rateid'])) {
	$rateid = $_GET['rateid'];
	$query = "UPDATE price_rate
			  set
			  status = 'N'
			  where 
			  id = '$rateid'
			 ";
	$ratestatus  = $object->query($query);
	if($ratestatus) {
	?>
    <script>window.location.assign("school_details.php?id=<?php echo $id;?>"); </script>
    <?php
	}
}
?>