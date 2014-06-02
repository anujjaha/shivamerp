<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$obj = new master;
	$schoolList = $obj->getSchoolList();
?>

<style type="text/css">
table {border-collapse:collapse;}
table.lfdj {border-collapse:separate;}
td.k{
      border-style:dotted; 
      border-width:3px; 
      border-color:#000000; 
      padding: 10px;
}
td.show_chart  {border-style:solid; 
      border-width:3px; 
      border-color:#333333; 
      padding:10px;
}
</style>
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
	$student_data = $obj->getStudentBySchoolId($school_id);
	$sizeData = array("Pent - Size","22","24","26","28","30","32","34","36","38","40","Total");
	$m22countStd1 = 0;
	//echo "<pre>";
//	print_r($student_data);
	//die;
	foreach($student_data as $key => $value)
	{
		if($value[3] == "1" and $value[5] == "Female") {
			if($value[6] == "22")
			{
				$stdOne['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$stdOne['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$stdOne['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$stdOne['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$stdOne['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$stdOne['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$stdOne['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$stdOne['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$stdOne['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$stdOne['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$stdOne['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$stdOne['44'][] = array($value[6]);
			}
		}
		
		if($value[3] == "2" and $value[5] == "Female") {
			if($value[6] == "22")
			{
				$stdTwo['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$stdTwo['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$stdTwo['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$stdTwo['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$stdTwo['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$stdTwo['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$stdTwo['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$stdTwo['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$stdTwo['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$stdTwo['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$stdTwo['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$stdTwo['44'][] = array($value[6]);
			}
				
		}
		
		if($value[3] == "3" and $value[5] == "Female") {

			if($value[6] == "22")
			{
				$stdThree['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$stdThree['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$stdThree['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$stdThree['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$stdThree['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$stdThree['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$stdThree['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$stdThree['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$stdThree['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$stdThree['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$stdThree['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$stdThree['44'][] = array($value[6]);
			}

		}
		
		if($value[3] == "4" and $value[5] == "Female") {
			
				if($value[6] == "22")
			{
				$stdFour['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$stdFour['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$stdFour['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$stdFour['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$stdFour['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$stdFour['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$stdFour['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$stdFour['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$stdFour['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$stdFour['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$stdFour['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$stdFour['44'][] = array($value[6]);
			}
		}
		
		if($value[3] == "5" and $value[5] == "Female") {
		
				if($value[6] == "22")
			{
				$stdFive['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$stdFive['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$stdFive['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$stdFive['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$stdFive['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$stdFive['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$stdFive['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$stdFive['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$stdFive['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$stdFive['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$stdFive['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$stdFive['44'][] = array($value[6]);
			}
		}
		
		if($value[3] == "6" and $value[5] == "Female") {

			if($value[6] == "22")
			{
				$stdSix['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$stdSix['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$stdSix['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$stdSix['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$stdSix['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$stdSix['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$stdSix['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$stdSix['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$stdSix['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$stdSix['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$stdSix['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$stdSix['44'][] = array($value[6]);
			}

		}
		
		if($value[3] == "7" and $value[5] == "Female") {
		
			if($value[6] == "22")
			{
				$stdSeven['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$stdSeven['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$stdSeven['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$stdSeven['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$stdSeven['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$stdSeven['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$stdSeven['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$stdSeven['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$stdSeven['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$stdSeven['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$stdSeven['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$stdSeven['44'][] = array($value[6]);
			}

		}
		
		if($value[3] == "8" and $value[5] == "Female") {
			
			if($value[6] == "22")
			{
				$stdEight['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$stdEight['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$stdEight['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$stdEight['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$stdEight['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$stdEight['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$stdEight['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$stdEight['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$stdEight['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$stdEight['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$stdEight['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$stdEight['44'][] = array($value[6]);
			}
		}
		
		if($value[3] == "9" and $value[5] == "Female") {
			if($value[6] == "22")
			{
				$stdNine['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$stdNine['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$stdNine['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$stdNine['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$stdNine['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$stdNine['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$stdNine['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$stdNine['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$stdNine['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$stdNine['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$stdNine['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$stdNine['44'][] = array($value[6]);
			}
		}
		
		if($value[3] == "10" and $value[5] == "Female") {
			if($value[6] == "22")
			{
				$stdTen['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$stdTen['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$stdTen['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$stdTen['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$stdTen['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$stdTen['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$stdTen['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$stdTen['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$stdTen['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$stdTen['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$stdTen['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$stdTen['44'][] = array($value[6]);
			}
		}
	}
?>

<table align="center" width="80%" border="2">
	<tr>
    	<td colspan="12" align="center">
        	<h2> School Name : <?php echo $school_name;?> </h2>
        </td>
    </tr>
	<?php
	$sr=0;
	foreach($sizeData as $charSize)
	{
		echo "<tr>";
		echo "<td class='show_chart' align='center'><h3>".$sizeData[$sr]."</h3></td>";
		if($sr == 0) {
		echo "<td class='show_chart' align='center'><h3>Std-1</h3></td>";
		echo "<td class='show_chart' align='center'><h3>Std-2</h3></td>";
		echo "<td class='show_chart' align='center'><h3>Std-3</h3></td>";
		echo "<td class='show_chart' align='center'><h3>Std-4</h3></td>";
		echo "<td class='show_chart' align='center'><h3>Std-5</h3></td>";
		echo "<td class='show_chart' align='center'><h3>Std-6</h3></td>";
		echo "<td class='show_chart' align='center'><h3>Std-7</h3></td>";
		echo "<td class='show_chart' align='center'><h3>Std-8</h3></td>";
		echo "<td class='show_chart' align='center'><h3>Std-9</h3></td>";
		echo "<td class='show_chart' align='center'><h3>Std-10</h3></td>";
		echo "<td class='show_chart' align='center'><h3>Total</h3></td>";
		}
		else{
		echo "<td class='show_chart'>";
		$countOne = count($stdOne[$sizeData[$sr]]);
		if($countOne > 0) { 
		echo $countOne;
		$msize22 = $msize22 + $countOne; 
		}
		 else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart'>";
		$countTwo = count($stdTwo[$sizeData[$sr]]);
		if($countTwo > 0) { echo $countTwo;
		$msize24 = $msize24 + $countTwo; 
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart'>";
		$countThree = count($stdThree[$sizeData[$sr]]);
		if($countThree > 0) { echo $countThree;
		$msize26 = $msize26 + $countThree; 
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart'>";
		$countFour = count($stdFour[$sizeData[$sr]]);
		if($countFour > 0) { echo $countFour;
		$msize28 = $msize28 + $countFour; 
		} else { echo "-";}
		echo "</td class='show_chart'>";

		echo "<td class='show_chart'>";
		$countFive = count($stdFive[$sizeData[$sr]]);
		if($countFive > 0) { echo $countFive;
		$msize30 = $msize30 + $countFive;
		} else { echo "-";}
		echo "</td>";
		
		
		echo "<td class='show_chart'>";
		$countSix = count($stdSix[$sizeData[$sr]]);
		if($countSix > 0) { echo $countSix;
		$msize32 = $msize32 + $countSix;
		} else { echo "-";}
		echo "</td>";

		echo "<td class='show_chart'>";
		$countSeven = count($stdSeven[$sizeData[$sr]]);
		if($countSeven > 0) { echo $countSeven;
		$msize34 = $msize34 + $countSeven;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart'>";
		$countEight = count($stdEight[$sizeData[$sr]]);
		if($countEight > 0) { echo $countEight;
		$msize36 = $msize36 + $countEight;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart'>";
		$countNine = count($stdNine[$sizeData[$sr]]);
		if($countNine > 0) { echo $countNine;
		$msize38 = $msize38 + $countNine;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart'>";
		$countTen = count($stdTen[$sizeData[$sr]]);
		if($countTen > 0) { echo $countTen;
		$msize40 = $msize40 + $countTen;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center'>";
		//echo "---Total--";
		$total = $countOne + $countTwo + $countThree + $countFour + $countFive + $countSix
				 + $countSeven + $countEight + $countNine + $countTen;
		echo "<h3>";
		echo $total;
		echo "</h3>";
		//echo $sizeData[$sr];
		//echo $size22;
		//echo "</td>";
		}
		echo "</tr>";
	$sr++;
	}
	?>
    <tr>
		<td class='show_chart' align='center'>
        <h2>Total</h2>
        </td>
    	<td align="center"  class='show_chart'>
        	<h3><?php echo $msize22;?></h3>
        </td>
        <td  align="center"  class='show_chart'>
        	<h3><?php echo $msize24;?></h3>
        </td>
        <td align="center"  class='show_chart'>
        	<h3><?php echo $msize26;?></h3>
        </td>
        <td  align="center"  class='show_chart'>
        	<h3><?php echo $msize28;?></h3>
        </td>
        <td align="center"  class='show_chart'>
        	<h3><?php echo $msize30;?></h3>
        </td>
        <td  align="center"  class='show_chart'>
        	<h3><?php echo $msize32;?></h3>
        </td>
        <td  align="center"  class='show_chart'>
        	<h3><?php echo $msize34;?></h3>
        </td>
        <td align="center"  class='show_chart'>
        	<h3><?php echo $msize36;?></h3>
        </td>
        <td  align="center"  class='show_chart'>
        	<h3><?php echo $msize38;?></h3>
        </td>
        <td  align="center"  class='show_chart'>
        	<h3><?php echo $msize40;?></h3>
        </td>
         <td class='show_chart'>&nbsp;
         	
         </td>
    </tr>
</table>

<?php
}
?>