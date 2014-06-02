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
	$student_data = $obj->getStudentBySchoolIdCondition($school_id,$student_term);
?>
	<table align="center" border="2" width="80%">
    <tr>
    	<td colspan="10" align="center">
        	<h3> School Name : <?php echo $school_name;?></h3>
        </td>
    </tr>
    <tr>
    	<td colspan="10">
        	<strong> Term : <?php echo $student_term;?>
        </td>
    </tr>
    <tr>
   	<?php
	$sr=1;
	$std = "";
		foreach($student_data as $value)
		{
			?>	
        	<td style='border:1px solid black;'>
            	<strong>Std: <?php echo $value[3];?> - <?php echo $value[4];?></strong>
                <br>
                <strong>R.No. : <?php echo $value[1];?></strong>
                <br />
                 <strong><?php echo $value[2];?></strong>
                <br />
            	<?php
				if($value[5] == "Male") {
					$category = "B";
				}
				if($value[5] == "Female") {
					$category = "G";
				}
				?>
              <strong> <?php echo $category;?>  - 
                	<?php echo $value[6];?>
                    </strong>
            </td>
            
            <?php
			
			
			
            if(($sr%5)==0) {
			echo "</tr><tr>";
			}
			else {
			?>
            	<td style='border:1px solid black; width:10px;'>
            	 <?php echo "  "; ?>
            </td>
            <?php
			/*
				$std = $value[3];
				$nxtStd = $student_data[$sr][3];
				
			if($std != $nxtStd) {
				echo "</tr><tr><td>Stop HEre</tr>";
			}*/
		}
			 ?>
        <?php
		$sr++;
		}
		?>
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
