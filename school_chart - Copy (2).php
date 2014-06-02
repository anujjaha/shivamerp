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
	ob_start();
	$school_name = $_POST['school'];
	$school_id = $obj->getSchoolIdByName($school_name);
	$student_data = $obj->getStudentBySchoolId($school_id);
	$sizeData = array("Pent - Size","22","24","26","28","30","32","34","36","38","40");
	$m22countStd1 = 0;
	//echo "<pre>";
//	print_r($student_data);
	//die;
	foreach($student_data as $key => $value)
	{
		if($value[3] == "1" and $value[5] == "Male") {
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
		
		if($value[3] == "2" and $value[5] == "Male") {
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
		
		if($value[3] == "3" and $value[5] == "Male") {

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
		
		if($value[3] == "4" and $value[5] == "Male") {
			
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
		
		if($value[3] == "5" and $value[5] == "Male") {
		
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
		
		if($value[3] == "6" and $value[5] == "Male") {

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
		
		if($value[3] == "7" and $value[5] == "Male") {
		
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
		
		if($value[3] == "8" and $value[5] == "Male") {
			
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
		
		if($value[3] == "9" and $value[5] == "Male") {
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
		
		if($value[3] == "10" and $value[5] == "Male") {
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

<table align="center" width="80%" border="2" style="border:thick; border-width:medium;">
	<tr>
    	<td colspan="12" align="center">
        	<h2> School Name : <?php echo $school_name;?> </h2>
        </td>
    </tr>
    <tr>
        <td colspan="12">
        	<strong>Category : Boys</strong>
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
<hr />
<!--Female Chart Generate-->
<?php
	$FsizeData = array("Salvar - Size","22","24","26","28","30","32","34","36","38","40");
	foreach($student_data as $key => $value)
	{
		if($value[3] == "1" and $value[5] == "Female") {
			if($value[6] == "22")
			{
				$FstdOne['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$FstdOne['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$FstdOne['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$FstdOne['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$FstdOne['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$FstdOne['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$FstdOne['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$FstdOne['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$FstdOne['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$FstdOne['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$FstdOne['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$FstdOne['44'][] = array($value[6]);
			}
		}
		
		if($value[3] == "2" and $value[5] == "Female") {
			if($value[6] == "22")
			{
				$FstdTwo['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$FstdTwo['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$FstdTwo['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$FstdTwo['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$FstdTwo['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$FstdTwo['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$FstdTwo['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$FstdTwo['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$FstdTwo['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$FstdTwo['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$FstdTwo['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$FstdTwo['44'][] = array($value[6]);
			}
				
		}
		
		if($value[3] == "3" and $value[5] == "Female") {

			if($value[6] == "22")
			{
				$FstdThree['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$FstdThree['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$FstdThree['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$FstdThree['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$FstdThree['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$FstdThree['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$FstdThree['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$FstdThree['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$FstdThree['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$FstdThree['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$FstdThree['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$FstdThree['44'][] = array($value[6]);
			}

		}
		
		if($value[3] == "4" and $value[5] == "Female") {
			
				if($value[6] == "22")
			{
				$FstdFour['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$FstdFour['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$FstdFour['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$FstdFour['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$FstdFour['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$FstdFour['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$FstdFour['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$FstdFour['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$FstdFour['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$FstdFour['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$FstdFour['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$FstdFour['44'][] = array($value[6]);
			}
		}
		
		if($value[3] == "5" and $value[5] == "Female") {
		
				if($value[6] == "22")
			{
				$FstdFive['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$FstdFive['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$FstdFive['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$FstdFive['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$FstdFive['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$FstdFive['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$FstdFive['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$FstdFive['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$FstdFive['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$FstdFive['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$FstdFive['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$FstdFive['44'][] = array($value[6]);
			}
		}
		
		if($value[3] == "6" and $value[5] == "Female") {

			if($value[6] == "22")
			{
				$FstdSix['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$FstdSix['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$FstdSix['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$FstdSix['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$FstdSix['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$FstdSix['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$FstdSix['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$FstdSix['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$FstdSix['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$FstdSix['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$FstdSix['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$FstdSix['44'][] = array($value[6]);
			}

		}
		
		if($value[3] == "7" and $value[5] == "Female") {
		
			if($value[6] == "22")
			{
				$FstdSeven['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$FstdSeven['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$FstdSeven['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$FstdSeven['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$FstdSeven['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$FstdSeven['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$FstdSeven['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$FstdSeven['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$FstdSeven['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$FstdSeven['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$FstdSeven['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$FstdSeven['44'][] = array($value[6]);
			}

		}
		
		if($value[3] == "8" and $value[5] == "Female") {
			
			if($value[6] == "22")
			{
				$FstdEight['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$FstdEight['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$FstdEight['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$FstdEight['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$FstdEight['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$FstdEight['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$FstdEight['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$FstdEight['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$FstdEight['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$FstdEight['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$FstdEight['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$FstdEight['44'][] = array($value[6]);
			}
		}
		
		if($value[3] == "9" and $value[5] == "Female") {
			if($value[6] == "22")
			{
				$FstdNine['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$FstdNine['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$FstdNine['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$FstdNine['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$FstdNine['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$FstdNine['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$FstdNine['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$FstdNine['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$FstdNine['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$FstdNine['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$FstdNine['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$FstdNine['44'][] = array($value[6]);
			}
		}
		
		if($value[3] == "10" and $value[5] == "Female") {
			if($value[6] == "22")
			{
				$FstdTen['22'][] = array($value[6]);
			}
			else if($value[6] == "24")
			{
				$FstdTen['24'][] = array($value[6]);
			}
			else if($value[6] == "26")
			{
				$FstdTen['26'][] = array($value[6]);
			}
			else if($value[6] == "28")
			{
				$FstdTen['28'][] = array($value[6]);
			}
			else if($value[6] == "30")
			{
				$FstdTen['30'][] = array($value[6]);
			}
			else if($value[6] == "32")
			{
				$FstdTen['32'][] = array($value[6]);
			}
			else if($value[6] == "34")
			{
				$FstdTen['34'][] = array($value[6]);
			}
			else if($value[6] == "36")
			{
				$FstdTen['36'][] = array($value[6]);
			}
			else if($value[6] == "38")
			{
				$FstdTen['38'][] = array($value[6]);
			}
			else if($value[6] == "40")
			{
				$FstdTen['40'][] = array($value[6]);
			}
			else if($value[6] == "42")
			{
				$FstdTen['42'][] = array($value[6]);
			}
			else if($value[6] == "44")
			{
				$FstdTen['44'][] = array($value[6]);
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
    <tr>
    	<td colspan="12">
        	<strong> Category : Girl  </strong>
        </td>
    </tr>
	<?php
	$sr=0;
	foreach($FsizeData as $charSize)
	{
		echo "<tr>";
		echo "<td class='show_chart' align='center'><h3>".$FsizeData[$sr]."</h3></td>";
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
		$FcountOne = count($FstdOne[$FsizeData[$sr]]);
		if($FcountOne > 0) { 
		echo $FcountOne;
		$Fmsize22 = $Fmsize22 + $FcountOne; 
		}
		 else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart'>";
		$FcountTwo = count($FstdTwo[$FsizeData[$sr]]);
		if($FcountTwo > 0) { echo $FcountTwo;
		$Fmsize24 = $Fmsize24 + $FcountTwo; 
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart'>";
		$FcountThree = count($FstdThree[$FsizeData[$sr]]);
		if($FcountThree > 0) { echo $FcountThree;
		$Fmsize26 = $Fmsize26 + $FcountThree; 
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart'>";
		$FcountFour = count($FstdFour[$FsizeData[$sr]]);
		if($FcountFour > 0) { echo $FcountFour;
		$Fmsize28 = $Fmsize28 + $FcountFour; 
		} else { echo "-";}
		echo "</td class='show_chart'>";

		echo "<td class='show_chart'>";
		$FcountFive = count($FstdFive[$FsizeData[$sr]]);
		if($FcountFive > 0) { echo $FcountFive;
		$Fmsize30 = $Fmsize30 + $FcountFive;
		} else { echo "-";}
		echo "</td>";
		
		
		echo "<td class='show_chart'>";
		$FcountSix = count($FstdSix[$FsizeData[$sr]]);
		if($FcountSix > 0) { echo $FcountSix;
		$Fmsize32 = $Fmsize32 + $FcountSix;
		} else { echo "-";}
		echo "</td>";

		echo "<td class='show_chart'>";
		$FcountSeven = count($FstdSeven[$FsizeData[$sr]]);
		if($FcountSeven > 0) { echo $FcountSeven;
		$Fmsize34 = $Fmsize34 + $FcountSeven;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart'>";
		$FcountEight = count($FstdEight[$FsizeData[$sr]]);
		if($FcountEight > 0) { echo $FcountEight;
		$Fmsize36 = $Fmsize36 + $FcountEight;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart'>";
		$FcountNine = count($FstdNine[$FsizeData[$sr]]);
		if($FcountNine > 0) { echo $FcountNine;
		$Fmsize38 = $Fmsize38 + $FcountNine;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart'>";
		$FcountTen = count($FstdTen[$FsizeData[$sr]]);
		if($FcountTen > 0) { echo $FcountTen;
		$Fmsize40 = $Fmsize40 + $FcountTen;
		} else { echo "-";}
		echo "</td>";
		
		echo "<td class='show_chart' align='center'>";
		//echo "---Total--";
		$Ftotal = $FcountOne + $FcountTwo + $FcountThree + $FcountFour + $FcountFive + 
				  $FcountSix + $FcountSeven + $FcountEight + $FcountNine + $FcountTen;
		echo "<h3>";
		echo $Ftotal;
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
        	<h3><?php echo $Fmsize22;?></h3>
        </td>
        <td  align="center"  class='show_chart'>
        	<h3><?php echo $Fmsize24;?></h3>
        </td>
        <td align="center"  class='show_chart'>
        	<h3><?php echo $Fmsize26;?></h3>
        </td>
        <td  align="center"  class='show_chart'>
        	<h3><?php echo $Fmsize28;?></h3>
        </td>
        <td align="center"  class='show_chart'>
        	<h3><?php echo $Fmsize30;?></h3>
        </td>
        <td  align="center"  class='show_chart'>
        	<h3><?php echo $Fmsize32;?></h3>
        </td>
        <td  align="center"  class='show_chart'>
        	<h3><?php echo $Fmsize34;?></h3>
        </td>
        <td align="center"  class='show_chart'>
        	<h3><?php echo $Fmsize36;?></h3>
        </td>
        <td  align="center"  class='show_chart'>
        	<h3><?php echo $Fmsize38;?></h3>
        </td>
        <td  align="center"  class='show_chart'>
        	<h3><?php echo $Fmsize40;?></h3>
        </td>
         <td class='show_chart'>&nbsp;
         	
         </td>
    </tr>
</table>


<!--Female Charg End -->
<?php

$content = htmlentities(ob_get_contents());
?>
<form action="#" method="post">
	<input type="hidden" name="content" value="<?php echo $content;?>" />
    <input type="submit" name="print" value="Take Print" />
</form>
<?php
/*require_once("mpdf/mpdf.php");

$mpdf = new mPDF();
$content = "testing";
$mpdf->WriteHTML($content);

$mpdf->Output();
//exit;

//print_r($mpdf);
//die;
//$content = file_get_contents("http://localhost/kush/school_chart.php");
//echo "<pre>";
//print_r($content);
//die;

//$mpdf->WriteHTML("Teting of text of pdf");

//$mpdf->Output();
//exit;
*/
}

if(isset($_POST['print']))
{
ob_clean();
$content = $_POST['content'];

require_once("mpdf/mpdf.php");

$mpdf = new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0);
//	$content = "testing";
$stylesheet = file_get_contents('css/tabel.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($content,2);
$mpdf->SetDisplayMode('fullpage');
$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
$mpdf->Output();
exit;



}
?>