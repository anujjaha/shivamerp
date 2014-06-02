<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$obj = new master;
	$schoolList = $obj->getSchoolList();
	$termList = $obj->getTermList();
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
        	<h2> Student List </h2>
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
    	<td align="right" width="50%" class="add_student">
        	Select Term :
    	</td>
        <td>
        	<select name="term">
            <?php
				foreach($termList as $term)
				{
				?>
               	<option value="<?php echo $term['0'];?>">
                 <?php echo $term['0'];?> 
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
if(isset($_POST['chart'])) {
	ob_start();
	$school_name = $_POST['school'];
	$student_term = $_POST['term'];
	$school_id = $obj->getSchoolIdByName($school_name);
	$student_data = $obj->getStudentBySchoolIdConditionByOrder($school_id,$student_term);
	//echo "<pre>";
	//print_r($student_data);
	$sr=0;
	foreach($student_data as $value) {
		if($value[3] == 1) 
		{
			$std[1][] = $student_data[$sr];
		}
		if($value[3] == 2) 
		{
			$std[2][] = $student_data[$sr];
		}
		if($value[3] == 3) 
		{
			$std[3][] = $student_data[$sr];
		}
		if($value[3] == 4) 
		{
			$std[4][] = $student_data[$sr];
		}
		if($value[3] == 5) 
		{
			$std[5][] = $student_data[$sr];
		}
		if($value[3] == 6) 
		{
			$std[6][] = $student_data[$sr];
		}
		if($value[3] == 7) 
		{
			$std[7][] = $student_data[$sr];
		}
		if($value[3] == 8) 
		{
			$std[8][] = $student_data[$sr];
		}
		if($value[3] == 9) 
		{
			$std[9][] = $student_data[$sr];
		}
		if($value[3] == 10) 
		{
			$std[10][] = $student_data[$sr];
		}
		if($value[3] == 11) 
		{
			$std[11][] = $student_data[$sr];
		}
		if($value[3] == 12) 
		{
			$std[12][] = $student_data[$sr];
		}
	$sr++;
	}
	//print_r($std);
	$stdsr = 1;
	foreach($std as $key => $standard) {
		foreach($std[$stdsr] as $value) {
			if($value[4] == "A") {
				$std[$stdsr]["A"][] = $value;
			}
			if($value[4] == "B") {
				$std[$stdsr]["B"][] = $value;
			}
			if($value[4] == "C") {
				$std[$stdsr]["C"][] = $value;
			}
			if($value[4] == "D") {
				$std[$stdsr]["D"][] = $value;
			}
		}
	$stdsr++;
	}
	/*print_r($std[1]["A"]);
	echo "<hr>";
	print_r($std[1]["B"]);
	echo "<hr>";
	print_r($std[2]["B"]);
	echo "<hr>";
	print_r($std[3]["A"]);*/
	?>
<table align="center" border="2" width="90%" style="border:thick">
    <tr>
    	<td colspan="2" align="center" style='border:1px solid black;'>
        	<h3> School Name : <?php echo $school_name;?></h3>
        </td>
    </tr>
    <tr>
    	<td colspan="2" style='border:1px solid black;'>
        	<strong> Term : <?php echo $student_term;?> </strong>
        </td>
    </tr>
	<tr>
    <td colspan="2" align="center">
    <?php
    $header = "<tr><td style='border:1px solid black;'><h3>
					Roll No.</h3></td>
					<td style='border:1px solid black;'>
					<h3>Name</h3></td><td style='border:1px solid black;'>
					<h3>Size</h3></td></tr>";
	for($k=1;$k<13;$k++)
	{
		if(!empty($std[$k]["A"])) {
			echo "<table align='center' width='80%' border='2'>";
			echo "<tr><td colspan='3' align='center'><h2>Standard : ".$k." - A</h2></td></tr>";
			echo $header;
			foreach($std[$k]["A"] as $myvalA) {
				echo "<tr>";
				echo "<td width='30%' style='border:1px solid black;'>".$myvalA[1]."</td>";
				echo "<td width='50%' style='border:1px solid black;'>".$myvalA[2]."</td>";
				echo "<td width='20%' style='border:1px solid black;'>".$myvalA[6]."</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo "<hr>";
		}
		
		if(!empty($std[$k]["B"])) {
			echo "<table align='center' width='80%' border='2'>";
			echo "<tr><td colspan='3' align='center'><h2>Standard : ".$k." - B</h2></td></tr>";
			echo $header;
			foreach($std[$k]["B"] as $myvalB) {
				echo "<tr>";
				echo "<td width='30%' style='border:1px solid black;'>".$myvalB[1]."</td>";
				echo "<td width='50%' style='border:1px solid black;'>".$myvalB[2]."</td>";
				echo "<td width='20%' style='border:1px solid black;'>".$myvalB[6]."</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo "<hr>";
		}
		
		if(!empty($std[$k]["C"])) {
			echo "<table align='center' width='80%' border='2'>";
			echo "<tr><td colspan='3' align='center'><h2>Standard : ".$k." - C</h2></td></tr>";
			echo $header;
			foreach($std[$k]["C"] as $myvalC) {
				echo "<tr>";
				echo "<td width='30%' style='border:1px solid black;'>".$myvalC[1]."</td>";
				echo "<td width='50%' style='border:1px solid black;'>".$myvalC[2]."</td>";
				echo "<td width='20%' style='border:1px solid black;'>".$myvalC[6]."</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo "<hr>";
		}
		
		if(!empty($std[$k]["D"])) {
			echo "<table align='center' width='80%' border='2'>";
			echo "<tr><td colspan='3' align='center'><h2>Standard : ".$k." - D</h2></td></tr>";
			echo $header;
			foreach($std[$k]["D"] as $myvalD) {
				echo "<tr>";
				echo "<td width='30%' style='border:1px solid black;'>".$myvalD[1]."</td>";
				echo "<td width='50%' style='border:1px solid black;'>".$myvalD[2]."</td>";
				echo "<td width='20%' style='border:1px solid black;'>".$myvalD[6]."</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo "<hr>";
		}
	}
	?>
  </td>
   </tr>
</table>
	
   
    	<form action="#" method="post">
	<?php    $content = htmlentities(ob_get_contents()); ?>
    	<input type="hidden" name="content" value="<?php echo $content;?>" />
    	<input type="submit" name="print" value="Print Students" />
    </form>
<?php
}

?>

   <?php
   if(isset($_POST['print'])) {
	ob_clean();
	$content = $_POST['content'];
	require_once("mpdf/mpdf.php");
	$mpdf = new mPDF();
	$mpdf->SetHeader('Student Print');
	$mpdf->defaultheaderfontsize=20;
	$mpdf->SetFooter('{PAGENO}');
	$mpdf->WriteHTML($content);
	$mpdf->SetDisplayMode('fullpage');
	$mpdf->list_indent_first_level = 0;  
	$mpdf->Output();
	exit;

   }
   ?>
