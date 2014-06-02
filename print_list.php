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
        	<h2> Print Student List </h2>
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
        	<input type="submit" name="chart" value="Generate Student List" />
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
	//echo "<pre>";
	
	//print_r($std);
	//die;
	$stdsr = 1;
	foreach($std as $key => $standard) {
		foreach($std[$key] as $value) {
			if($value[4] == "A") {
				$std[$key]["A"][] = $value;
			}
			if($value[4] == "B") {
				$std[$key]["B"][] = $value;
			}
			if($value[4] == "C") {
				$std[$key]["C"][] = $value;
			}
			if($value[4] == "D") {
				$std[$key]["D"][] = $value;
			}
			if($value[4] == "E") {
				$std[$key]["E"][] = $value;
			}
		}
	$stdsr++;
	}
	?>
<div>
<center><h2 style="margin-left:120px;">School Name : <?php echo $school_name;?></h2></center>
<h3 style="margin-left:120px;">Term : <?php echo $student_term;?> </h3>
<br />
    <?php
    $header = "<tr><td style='border:1px solid black;' width='10%'><h3>
					Roll No.</h3></td>
					<td style='border:1px solid black;' width='40%'>
					<h3>Name</h3></td><td style='border:1px solid black;' width='10%'>
					<h3>Size</h3></td>
					<td style='border:1px solid black;' width='40%'>Remarks</td></tr>";
	for($k=1;$k<13;$k++)
	{ 
		if(!empty($std[$k]["A"])) {
			$maleA = 0;
			$femaleA = 0;
			echo "<table align='center' width='80%' border='2'>";
			echo "<tr><td colspan='4' align='center'><h2>Standard : ".$k." - A</h2></td></tr>";
			echo $header;
			foreach($std[$k]["A"] as $myvalA) {
				if($myvalA[5] == "Male")
				{
				$maleA++;
				}
				if($myvalA[5] == "Female")
				{
				$femaleA++;
				}
				echo "<tr>";
				echo "<td width='10%' style='border:1px solid black;'>".$myvalA[1]."</td>";
				echo "<td width='40%' style='border:1px solid black;'>".ucfirst($myvalA[2])."</td>";
				echo "<td width='10%' style='border:1px solid black;'>".$myvalA[6]."</td>";
				echo "<td width='40%' style='border:1px solid black;'> </td>";
				echo "</tr>";
			}
			echo "<tr>";
			echo "<td colspan='2'><h2>Boys :".$maleA."</h2></td>";
			echo "<td colspan='2' align='right'><h2>Girls :".$femaleA."</h2></td>";
			echo "</tr>";
			echo "</table>";
			echo "<p align='right'>Signature : __________________________</p>";
			echo "<pagebreak />";
		}
		
		if(!empty($std[$k]["B"])) {
			$maleB = 0;
			$femaleB = 0;
			echo "<table align='center' width='80%' border='2'>";
			echo "<tr><td colspan='4' align='center'><h2>Standard : ".$k." - B</h2></td></tr>";
			echo $header;
			foreach($std[$k]["B"] as $myvalB) {
				if($myvalB[5] == "Male")
					{
					$maleB++;
					}
					if($myvalB[5] == "Female")
					{
					$femaleB++;
					}
				echo "<tr>";
				echo "<td width='10%' style='border:1px solid black;'>".$myvalB[1]."</td>";
				echo "<td width='40%' style='border:1px solid black;'>".ucfirst($myvalB[2])."</td>";
				echo "<td width='10%' style='border:1px solid black;'>".$myvalB[6]."</td>";
				echo "<td width='40%' style='border:1px solid black;'> </td>";
				echo "</tr>";
			}
			echo "<tr>";
			echo "<td colspan='2'><h2>Boys :".$maleB."</h2></td>";
			echo "<td colspan='2' align='right'><h2>Girls :".$femaleB."</h2></td>";
			echo "</tr>";
			echo "</table>";
			echo "<p align='right'>Signature : __________________________</p>";
			echo "<pagebreak />";
		}
		
		if(!empty($std[$k]["C"])) {
			$maleC= 0;
			$femaleC = 0;
			echo "<table align='center' width='80%' border='2'>";
			echo "<tr><td colspan='4' align='center'><h2>Standard : ".$k." - C</h2></td></tr>";
			echo $header;
			foreach($std[$k]["C"] as $myvalC) {
				if($myvalC[5] == "Male")
				{
				$maleC++;
				}
				if($myvalC[5] == "Female")
				{
				$femaleC++;
				}
				echo "<tr>";
				echo "<td width='10%' style='border:1px solid black;'>".$myvalC[1]."</td>";
				echo "<td width='40%' style='border:1px solid black;'>".ucfirst($myvalC[2])."</td>";
				echo "<td width='10%' style='border:1px solid black;'>".$myvalC[6]."</td>";
				echo "<td width='40%' style='border:1px solid black;'> </td>";
				echo "</tr>";
			}
			echo "<tr>";
			echo "<td colspan='2'><h2>Boys :".$maleC."</h2></td>";
			echo "<td colspan='2' align='right'><h2>Girls :".$femaleC."</h2></td>";
			echo "</tr>";
			echo "</table>";
			echo "<p align='right'>Signature : __________________________</p>";
			echo "<pagebreak />";
		}
		
		if(!empty($std[$k]["D"])) {
		
			$maleD = 0;
			$femaleD = 0;
			echo "<table align='center' width='80%' border='2'>";
			echo "<tr><td colspan='4' align='center'><h2>Standard : ".$k." - D</h2></td></tr>";
			echo $header;
			foreach($std[$k]["D"] as $myvalD) {
				if($myvalD[5] == "Male")
				{
				$maleD++;
				}
				if($myvalD[5] == "Female")
				{
				$femaleD++;
				}
				echo "<tr>";
				echo "<td width='10%' style='border:1px solid black;'>".$myvalD[1]."</td>";
				echo "<td width='40%' style='border:1px solid black;'>".ucfirst($myvalD[2])."</td>";
				echo "<td width='10%' style='border:1px solid black;'>".$myvalD[6]."</td>";
				echo "<td width='40%' style='border:1px solid black;'> </td>";
				echo "</tr>";
			}
			echo "<tr>";
			echo "<td colspan='2'><h2>Boys :".$maleD."</h2></td>";
			echo "<td colspan='2' align='right'><h2>Girls :".$femaleD."</h2></td>";
			echo "</tr>";
			echo "</table>";
			echo "<p align='right'>Signature : __________________________</p>";
			echo "<pagebreak />";
		}
		
		if(!empty($std[$k]["E"])) {
			$maleE = 0;
			$femaleE = 0;
			echo "<table align='center' width='80%' border='2'>";
			echo "<tr><td colspan='4' align='center'><h2>Standard : ".$k." - E</h2></td></tr>";
			echo $header;
			foreach($std[$k]["E"] as $myvalE) {
				if($myvalE[5] == "Male")
				{
				$maleE++;
				}
				if($myvalE[5] == "Female")
				{
				$femaleE++;
				}
				echo "<tr>";
				echo "<td width='10%' style='border:1px solid black;'>".$myvalE[1]."</td>";
				echo "<td width='40%' style='border:1px solid black;'>".ucfirst($myvalE[2])."</td>";
				echo "<td width='10%' style='border:1px solid black;'>".$myvalE[6]."</td>";
				echo "<td width='40%' style='border:1px solid black;'> </td>";
				echo "</tr>";
			}
			echo "<tr>";
			echo "<td colspan='2'><h2>Boys :".$maleE."</h2></td>";
			echo "<td colspan='2' align='right'><h2>Girls :".$femaleE."</h2></td>";
			echo "</tr>";
			echo "</table>";
			echo "<p align='right'>Signature : __________________________</p>";
			echo "<pagebreak />";
		}
		
	}
	?>
 </div>
	
   
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
//	$mpdf->Output();
	$filename = "xpdf/".rand(1111,9999)."_".rand(1111,9999)."_Student_Print_List.pdf";
	$mpdf->Output($filename,'F');
	?>
	<script>
	window.location.assign("<?php echo $filename;?>");
	</script>
	<?php
	}
	?>