<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$obj = new master;
	$schoolList = $obj->getSchoolList();
?>
<table align="center" border="2" width="80%">
<form action="#" method="POST">
	<tr>	
    	<td align="center" colspan="2">
        	<h2> School Chart</h2>
        </td>
    </tr>
    <tr>
    	<td align="right" width="50%" class="add_student">
        	Select School :
    	</td>
        <td>
        	<select name="school">
            <?php
				foreach($schoolList as $school)
				{
				?>
               	<option value="<?php echo $school['1'];?>">
                 <?php echo $school['1'];?> 
                 </option>
			    <?php
				}
			?>
            </select>
        </td>
   </tr>
   <tr>
   		<td colspan="2" align="center">
        	<input type="submit" name="chart" value="Generate Chart" />
        </td>
   </tr>
</form>   
</table>
<?php
if(isset($_POST['chart']))
{
	$school_name = $_POST['school'];
	$school_id = $obj->getSchoolIdByName($school_name);
	$student_data = $obj->demo($school_id);
	$sizeData = array("Pent","24","26","28","30","32","34","36","38","40");
	$standard = array(1,2,3,4,5,6,7,8,9,10);
	echo "<pre>";
	print_r($student_data);
?>	
<table align="center" border="2">
	<?php
	$sr=0;
	foreach($sizeData as $charSize)
	{
		echo "<tr>";
		echo "<td>".$sizeData[$sr]."</td>";
		if($sr == 0) {
		echo "<td>1</td>";
		echo "<td>2</td>";
		echo "<td>3</td>";
		echo "<td>4</td>";
		echo "<td>5</td>";
		echo "<td>6</td>";
		echo "<td>7</td>";
		echo "<td>8</td>";
		echo "<td>9</td>";
		echo "<td>10</td>";
		}
		else{
		echo "<td>-</td>";
		if($sr == 1){
		echo "<td>i mh ere</td>";
		}else{
		echo "<td>-</td>";
		}
		echo "<td>-</td>";
		echo "<td>-</td>";
		echo "<td>-</td>";
		
		
		echo "<td>-</td>";
		echo "<td>-</td>";
		echo "<td>-</td>";
		if($sr == 7){
		echo "<td>i mh ere</td>";
		}else{
		echo "<td>-</td>";
		}
	
	}
		echo "</tr>";
	$sr++;
	}
	?>
</table>
<?php
}
?>