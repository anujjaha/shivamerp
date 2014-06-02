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
		
	$school_name = $_POST['school'];
	$student_term = $_POST['term'];
	$school_id = $obj->getSchoolIdByName($school_name);
	$student_data = $obj->getStudentBySchoolIdCondition($school_id,$student_term);
?>
<?php
//Buffer Out put start
ob_start();
?>
	
   
   	<?php
	$stdOne .= "<tr>";
	$stdTwo .= "<tr>";
	$stdThree .= "<tr>";
	$stdFour .= "<tr>";
	$stdFive .= "<tr>";
	$stdSix .= "<tr>";
	$stdSeven .= "<tr>";
	$stdEight .= "<tr>";
	$stdNine  .= "<tr>";
	$stdTen .= "<tr>";
	$stdEleven .= "<tr>";
	$stdTwelve .= "<tr>";
	
	$sr=1;
	$srOne=1;
	$srTwo=1;
	$srThree=1;
	$srFour=1;
	$srFive= 1;
	$srSix = 1;
	$srSeven = 1;
	$srEight = 1;
	$srNine = 1;
	$srTen = 1;
	$srEleven = 1;
	$srTwelve = 1;
	
	$std = "";
	$myfxsr = 1;
		foreach($student_data as $value)
		{
			if(($myfxsr % 5) == 0 )
			{
				$h1style = "<h1 style='margin-top:4mm;'>";
			}
			
			else if(($myfxsr % 6) == 0 )
			{
				$h1style = "<h1 style='margin-top:8mm;'>";
			}
			else if(($myfxsr % 8) == 0 )
			{
				$h1style = "<h1 style='margin-top:10mm;'>";
			}
			else
			{
				$h1style = "<h1>";
			}
			
		if($value[3] == "1")
		{
			$stdOne .= "<td align='center' style='border:0px solid;width: 38mm;height: 36.4mm;'>";
            $stdOne .= "<br>Std: <h2 style='font-size:24px;'>". $value[3] ."-". $value[4]."</h2>";
            $stdOne .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdOne .= "<strong>". ucfirst($value[2]) ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdOne .= "<strong> ".$category ."-"; 
             $stdOne .= $value[6];
             $stdOne .= "</strong></td>";
           
            if(($srOne%5)==0) {
			$stdOne .= "</tr><tr>";
			}
			else {
			
      	 	}
			$srOne++;
		}
		if($value[3] == "2")
		{
			$stdTwo .= "<td align='center' style='border:0px solid;width: 38mm;height: 36.4mm;top-margin:5px;'>";
            $stdTwo .="<br>Std: <h2 style='font-size:24px;'>". $value[3] ."-". $value[4]."</h2>";
            $stdTwo .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdTwo .= "<strong>". ucfirst($value[2]) ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdTwo .= "<strong> ".$category ."-"; 
             $stdTwo .= $value[6];
             $stdTwo .= "</strong></td>";
           
            if(($srTwo%5)==0) {
			$stdTwo .= "</tr><tr>";
			}
			else {
			
      		 }
		$srTwo++;
		}
		
		if($value[3] == "3")
		{
			$stdThree .= "<td align='center' style='border:0px solid;width: 38mm;height: 36.4mm;'>";
            $stdThree .= "<br>Std: <h2 style='font-size:24px;'>". $value[3] ."-". $value[4]."</h2>";
            $stdThree .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdThree .= "<strong>". ucfirst($value[2]) ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdThree .= "<strong> ".$category ."-"; 
             $stdThree .= $value[6];
             $stdThree .= "</strong></td>";
           
            if(($srThree%5)==0) {
			$stdThree .= "</tr><tr>";
			}
			else {
			
      		 }
		$srThree++;
		}
		
		if($value[3] == "4")
		{
			$stdFour .= "<td align='center' style='border:0px solid;width: 38mm;height: 36.4mm;top-margin:5px;'>";
            $stdFour .= "<br>Std: <h2 style='font-size:24px;'>". $value[3] ."-". $value[4]."</h2>";
            $stdFour .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdFour .= "<strong>". ucfirst($value[2]) ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdFour .= "<strong> ".$category ."-"; 
             $stdFour .= $value[6];
             $stdFour .= "</strong></td>";
           
            if(($srFour%5)==0) {
			$stdFour .= "</tr><tr>";
			}
			else {
			
      		 }
		$srFour++;
		}
		
		
		if($value[3] == "5")
			{
			$stdFive .= "<td align='center' style='border:0px solid;width: 38mm;height: 36.4mm;top-margin:5px;'>";
            $stdFive .= "<br>Std: <h2 style='font-size:24px;'>". $value[3] ."-". $value[4]."</h2>";
            $stdFive .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdFive .= "<strong>". ucfirst($value[2]) ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdFive .= "<strong> ".$category ."-"; 
             $stdFive .= $value[6];
             $stdFive .= "</strong></td>";
           
            if(($srFive%5)==0) {
			$stdFive .= "</tr><tr>";
			}
			else {
			
      		 }
		$srFive++;
		}

		if($value[3] == "6")
		{
			$stdSix .= "<td align='center' style='border:0px solid;width: 38mm;height: 36.4mm;top-margin:5px;'>";
            $stdSix .= "<br>Std: <h2 style='font-size:24px;'>". $value[3] ."-". $value[4]."</h2>";
            $stdSix .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdSix .= "<strong>". ucfirst($value[2]) ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdSix .= "<strong> ".$category ."-"; 
             $stdSix .= $value[6];
             $stdSix .= "</strong></td>";
           
            if(($srSix%5)==0) {
			$stdSix .= "</tr><tr>";
			}
			else {
			
      		 }
		$srSix++;
		}
		
		if($value[3] == "7")
		{
			$stdSeven .= "<td align='center' style='border:0px solid;width: 38mm;height: 36.4mm;top-margin:5px;'>";
            $stdSeven .= "<br>Std: <h2 style='font-size:24px;'>". $value[3] ."-". $value[4]."</h2>";
            $stdSeven .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdSeven .= "<strong>". ucfirst($value[2]) ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdSeven .= "<strong> ".$category ."-"; 
             $stdSeven .= $value[6];
             $stdSeven .= "</strong></td>";
           
            if(($srSeven%5)==0) {
			$stdSeven .= "</tr><tr>";
			}
			else {
			
      		 }
		$srSeven++;
		}
		
		if($value[3] == "8")
		{
			$stdEight .= "<td align='center' style='border:0px solid;width: 38mm;height: 36.4mm;top-margin:5px;'>";
            $stdEight .= "<br>Std: <h2 style='font-size:24px;'>". $value[3] ."-". $value[4]."</h2>";
            $stdEight .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdEight .= "<strong>". ucfirst($value[2]) ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdEight .= "<strong> ".$category ."-"; 
             $stdEight .= $value[6];
             $stdEight .= "</strong></td>";
           
            if(($srEight%5)==0) {
			$stdEight .= "</tr><tr>";
			}
			else {
			
      		 }
		$srEight++;
		}
		
		
		if($value[3] == "9")
		{
			$stdNine .= "<td align='center' style='border:0px solid;width: 38mm;height: 36.4mm;top-margin:5px;'>";
            $stdNine .= "<br>Std: <h2 style='font-size:24px;'>". $value[3] ."-". $value[4]."</h2>";
            $stdNine .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdNine .= "<strong>". ucfirst($value[2]) ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdNine .= "<strong> ".$category ."-"; 
             $stdNine .= $value[6];
             $stdNine .= "</strong></td>";
           
            if(($srNine%5)==0) {
			$stdNine .= "</tr><tr>";
			}
			else {
			
      		 }
		$srNine++;
		}
		
		
		if($value[3] == "10")
		{
			$stdTen .= "<td align='center' style='border:0px solid;width: 38mm;height: 36.4mm;top-margin:5px;'>";
            $stdTen .= "<br>Std: <h2 style='font-size:24px;'>". $value[3] ."-". $value[4]."</h2>";
            $stdTen .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdTen .= "<strong>". ucfirst($value[2]) ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdTen .= "<strong> ".$category ."-"; 
             $stdTen .= $value[6];
             $stdTen .= "</strong></td>";
           
            if(($srTen%5)==0) {
			$stdTen .= "</tr><tr>";
			}
			else {
			
      		 }
		$srTen++;
		}
		
		if($value[3] == "11")
		{
			$stdEleven .= "<td align='center' style='border:0px solid;width: 38mm;height: 36.4mm;top-margin:5px;'>";
            $stdEleven .= "<br>Std: <h2 style='font-size:24px;'>". $value[3] ."-". $value[4]."</h2>";
            $stdEleven .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdEleven .= "<strong>". ucfirst($value[2]) ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdEleven .= "<strong> ".$category ."-"; 
             $stdEleven .= $value[6];
             $stdEleven .= "</strong></td>";
           
            if(($srEleven%5)==0) {
			$stdEleven .= "</tr><tr>";
			}
			else {
			
      		 }
		$srEleven++;
		}
		
		if($value[3] == "12")
		{
			$stdTwelve .= "<td align='center' style='border:0px solid;width: 38mm;height: 36.4mm;top-margin:5px;'>";
            $stdTwelve .= "<br>Std: <h2 style='font-size:24px;'>". $value[3] ."-". $value[4]."</h2>";
            $stdTwelve .= "<strong>R.No. : ". $value[1] ."</strong><br />";
            $stdTwelve .= "<strong>". ucfirst($value[2]) ."</strong><br />";
            if($value[5] == "Male") {
				$category = "B";
				}
				if($value[5] == "Female") {
				$category = "G";
				}
				
             $stdTwelve .= "<strong> ".$category ."-"; 
             $stdTwelve .= $value[6];
             $stdTwelve .= "</strong></td>";
           
            if(($srTwelve%5)==0) {
			$stdTwelve .= "</tr><tr>";
			}
			else {
			
      		 }
		$srTwelve++;
		}
		
		$sr++;
		$myfxsr++;
		}
		$stdOne .= "</tr>";
		$stdTwo .= "</tr>";
		$stdThree .= "</tr>";
		$stdFour .= "</tr>";
		$stdFive .= "</tr>";
		$stdSix .= "</tr>";
		$stdSeven .= "</tr>";
		$stdEight .= "</tr>";
		$stdNine .= "</tr>";
		$stdTen .= "</tr>";
		$stdEleven .= "</tr>";
		$stdTwelve .= "</tr>";
		?>
   <table style="width: 100%;
            border-collapse: collapse;border:0px solid;">
    <tr>
    	<td colspan="5" align="center" style="height:100px;">
        	<h3> School Name : <?php echo $school_name;?></h3>
        </td>
    </tr>
    <tr>
    	<td colspan="5" style="height:50px;">
        	<strong> Term : <?php echo $student_term;?>
        </td>
    </tr>
     <?php
	print $stdOne;
	if(strlen($stdTwo) > 10) {
	?>
   
    <?php 
	}
	 print $stdTwo; 
	if(strlen($stdThree) > 10) {
	?>
   
    <?php
    }
	print $stdThree;
	if(strlen($stdFour) > 10) {
     ?>
     
    <?php  
	}
	print $stdFour; 
	if(strlen($stdFive) > 10) {
	?>
     
    <?php  }
	print $stdFive;
	if(strlen($stdSix) > 10) {
	 ?>
   
    <?php
	}
	 print $stdSix; 
	if(strlen($stdSeven) > 10) {
	?>
    
    <?php 
	}
	 print $stdSeven; 
	 if(strlen($stdEight) > 10) {
	 ?>
   
    <?php }
	 print $stdEight; 
	 if(strlen($stdNine) > 10) {
	 ?>
   
    <?php 
	} print $stdNine;
	if(strlen($stdTen) > 10) {
	 ?>
    
    <?php 
	}
	 print $stdTen; 
	 if(strlen($stdEleven) > 10) {
	 ?>
  
    <?php 
	} print $stdEleven; 
	if(strlen($stdTwelve) > 10) {
	?>
   
    <?php  
	}
	print $stdTwelve; ?>
    </table>
    <?php
	 $content = htmlentities(ob_get_contents()); 
	?>
    	<form action="#" method="post">
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


 include("mpdf/mpdf.php");

    $mpdf = new mPDF('c', 'A4', '', '',1 , 1, 1, 1, 1,1);

    $mpdf->SetDisplayMode('fullpage');

    $mpdf->list_indent_first_level = 0;

    $mpdf->WriteHTML($content,0);

   // $mpdf->Output('test.pdf','I');
 //   exit;


$filename = "xpdf/".rand(1111,9999)."_".rand(1111,9999)."_Chart.pdf";
$mpdf->Output($filename,'F');
?>
<script>
window.location.assign("<?php echo $filename;?>");
</script>
<?php
}

/*
require_once("mpdf/mpdf.php");

$mpdf = new mPDF();
//	$content = "testing";	
	$mpdf->SetHeader('Size Chart');
	$mpdf->defaultheaderfontsize=20;
	$mpdf->SetFooter('{PAGENO}');
	
$mpdf->WriteHTML($content);
$mpdf->SetDisplayMode('fullpage');
$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
$mpdf->Output();
exit;
*/
	//}
//	?>