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
<?php
if(isset($_POST))
{
	$selected_school = $_POST['school'];
	$selected_term = $_POST['term'];
	$selected_color = $_POST['color'];
	$selected_design = $_POST['design'];
}
?>
<?php
if(isset($_POST))
{
?>
<table align="center" border="2" width="80%">
<form action="#" method="POST">
	<tr>	
    	<td align="center" colspan="2">
        	<h3> Generate Cutting Chart </h3>
        </td>
    </tr>
    <tr>
    	<td align="right" width="50%" class="add_student">
        	Select School :
    	</td>
        <td>
        	<select name="school">
			<?php
			if(isset($selected_school))
			{
			?>
			<option><?php echo $selected_school;?></option>
			<?php
			}
			?>
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
			if(isset($selected_term))
			{
			?>
			<option><?php echo $selected_term;?></option>
			<?php
			}
			?>
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
    	<td align="right" width="50%" class="add_student">
        	Color :
    	</td>
        <td>
			<input type="text" name="color" value="<?php if(isset($_POST['color'])) echo $selected_color;?>" />
        </td>
   </tr>
   
   <tr>
    	<td align="right" width="50%" class="add_student">
        	Design :
    	</td>
        <td>
			<input type="text" name="design" value="<?php if(isset($_POST['design'])) echo $selected_design;?>" />
        </td>
   </tr>
   <tr>
   		<td colspan="2" align="center">
        	<input type="submit" name="cutting_chart" value="Generate Cutting Chart" onclick="return confirm('You want Print Now ?')" />
        </td>
   </tr>
</form>   
</table>
<?php } ?>
<?php
if(isset($_POST['cutting_chart']))
{
	$school_name = $_POST['school'];
	$term = $_POST['term'];
	$design = $_POST['design'];
	$color = $_POST['color'];
	$school_id = $obj->getSchoolIdByName($school_name);
	$student_data = $obj->getStudentBySchoolIdCondition($school_id,$term);
	
	$studentsBoys = array();
	$studentsGirls = array();
	$sr=0;
	foreach($student_data as $value)
	{
		if($value['5'] == "Male")
		{
			$studentsBoys[] = $student_data[$sr];
		}
		
		if($value['5'] == "Female")
		{
			$studentsGirls[] = $student_data[$sr];
		}
		
	$sr++;
	}
	
	$boySize = array("Size","24","26","28","30","32","34","36","38","40","42","44");
	
	//Create Boys Array to Set value by Size
	$boySizeValue = array();
	?>
	<?php
	$totalBoys = 0;
	foreach($boySize as $bvalue)
	{
	$bsr=0;
				$pr=0;
				foreach($studentsBoys as $boysValues)
				{
					if($boysValues[6] == $bvalue )
					{
						$pr++;
					}
				}
				$pr = $pr * 2;
				$boySizeValue[] = array($bvalue=>$pr);
				$totalBoys = $totalBoys + $pr;
				?>
	<?php	
	}
	?>
	
	<?php
	ob_start();
	?>
	<style>
	td {border: 0.1mm solid #888888;}
	</style>
	<?php
	//Do the All thing Twice
	for($i=0;$i<2;$i++)
	{
	?>
	<!-- Generate HTML Output for Boys Category -->
	<table align="center" border="2"  width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="8">
		<tr>
			<td align="center" colspan="2">
			 <h1> Cutting Chart </h1> 
			 </td>
		</tr>
		<tr>
			<td>
			<strong>School Name : <?php echo $school_name;?></strong>
			</td>
			<td>
			<strong>Term : <?php echo $term;?></strong>
			</td>
		</tr>
		<tr>
			<td>
			<strong>Color : <?php echo $color;?></strong>
			</td>
			<td>
			<strong>Design No. : <?php echo $design;?></strong>
			</td>
		</tr>
	</table>
	
	<table align="center" border="2"  width="100%" style="font-size: 9pt;" cellpadding="8">
		<tr>
			<td colspan="<?php echo count($boySize)+1;?>">
				<h3>Category :  Boys Pent </h3>
			</td>
		</tr>
		<tr>
		<?php
		foreach($boySize as $xvalue)
		{
		?>
			<td><?php echo $xvalue;?></td>
		<?php
		}
		?>
		<td>
			<strong>Total</strong>
		</td>
		</tr>
		<tr>
		<?php
		$xyz = 0;
		foreach($boySize as $yvalue)
		{
		?>
			<td>
			<?php 
			echo $boySizeValue[$xyz][$yvalue]; ?>
			</td>
		<?php
		$xyz++;
		}
		?>
		<td><strong> <?php echo $totalBoys;?></strong> </td>
		</tr>
	</table>
	<!-- End of Boys Pents Category -->
	
	<?php
		$s20 = 0;
		$s22 = 0;
		$s24 = 0;
		$s26 = 0;
		$s28 = 0;
		$s30 = 0;
		$s32 = 0;
		foreach($studentsBoys as $shirtValue)
		{
			if($shirtValue[6] == "22" or $shirtValue[6] == "24" or $shirtValue[6] == "26")
			{
				$s20++;
			} 
			
			else if($shirtValue[6] == "28" )
			{
				$s22++;
			} 
			
			else if($shirtValue[6] == "30" )
			{
				$s24++;
			}
			
			else if($shirtValue[6] == "32" or $shirtValue[6] == "34" )
			{
				$s26++;
			}
			
			else if($shirtValue[6] == "36")
			{
				$s28++;
			} 
			
			else if($shirtValue[6] == "38")
			{
				$s30++;
			} 
			
			else
			{
				$s32++;
			}
		}
	?>
	
	<table align="center" border="2" style="font-size: 9pt;" cellpadding="8">
		<tr>
			<td colspan="8">
				<h3> Boys Shirts / 
				Meter Cloth :
				<?php echo count($studentsBoys) * 2 * 0.7;?>
				</h3>
			</td>
		</tr>
		<tr>
			<td style="border: 0.1mm solid #888888;">Shirt-20
			<br />
			<strong>C-10.5</strong>
			</td>
			<td style="border: 0.1mm solid #888888;">Shirt-22 	
			<br />
			<strong>C-11</strong>
			</td>
			<td style="border: 0.1mm solid #888888;">Shirt-24
			<br />
			<strong>C-11.5</strong></td>
			<td style="border: 0.1mm solid #888888;">Shirt-26 
			<br />
			<strong>C-12</strong></td>
			<td style="border: 0.1mm solid #888888;">Shirt-28 
			<br />
			<strong>C-12.5</strong></td>
			<td style="border: 0.1mm solid #888888;">Shirt-30 
			<br />
			<strong>C-13 </strong></td>
			<td style="border: 0.1mm solid #888888;">Shirt-32 
			<br />
			<strong>C-13.5</strong></td>
			<td style="border: 0.1mm solid #888888;"><strong>Total </strong></td>
		</tr>
		<tr>
			<td><?php echo $s20 * 2;?></td>
			<td><?php echo $s22 * 2;?></td>
			<td><?php echo $s24 * 2;?></td>
			<td><?php echo $s26 * 2;?></td>
			<td><?php echo $s28 * 2;?></td>
			<td><?php echo $s30 * 2;?></td>
			<td><?php echo $s32 * 2;?></td>
			<td><strong><?php echo count($studentsBoys) * 2;?> </strong></td>
		</tr>
	</table>
	
	
	<!-- Start of Girls Category -->
	<?php
	$femaleSize = array("22","24","26","28","30","32","34","36","38","40","42","44");
	$girlTotal = 0;
	foreach($femaleSize as $gvalue)
	{
		$grc = 0;
		foreach($studentsGirls as $grvalue)
		{
			if($grvalue[6] == $gvalue)
			{
				$grc++;
			}	
		} 
		$grc = $grc * 2;
		$girlSizeValue[] = array($gvalue => $grc);
		$girlTotal = $girlTotal + $grc;
	}
	?>
	<table align="center" border="2" style="font-size: 9pt;" cellpadding="8" width="100%">
		<tr>
			<td colspan="<?php echo count($femaleSize)+1;?>">
				<h3> Category : Girls - Salvar</h3>
			</td>
		</tr>
		<tr>
			<?php
				foreach($femaleSize as $fvalue)
				{
				?>
				<td><?php 
						if($fvalue < 23	 )
						{
						$fvalue = "Size";
						}
						echo $fvalue;
				?></td>
				<?php
				}
			?>
			<td>
				<strong>Total</strong>
			</td>
		</tr>
		<tr>
			<?php
				$gsr = 0;
				foreach($femaleSize as $fvalue)
				{
				?>
				<td><?php 
					if($fvalue < 22 )
					{
						echo "Size";
					}
					else
					{
					echo $girlSizeValue[$gsr][$fvalue];
					}
					?>
				</td>
					
				<?php
				$gsr++;
				}
			?>
			<td>
				<strong><?php echo $girlTotal;?></strong>
			</td>	
		</tr>
	</table>
	<!-- Girl Category Ends -->
	
	<!-- Start Second Girls Category -->
	<?php
	$femaleSize = array("Size","24","26","28","30","32","34","36","38","40","42","44");
	$girlTotal = 0;
	foreach($femaleSize as $gvalue)
	{
		$grc = 0;
		foreach($studentsGirls as $grvalue)
		{
			if($grvalue[6] == $gvalue)
			{
				$grc++;
			}	
		} 
		$grc = $grc * 2;
		$girlSizeValue[] = array($gvalue => $grc);
		$girlTotal = $girlTotal + $grc;
	}
	?>
	<table align="center" border="2" style="font-size: 9pt;" cellpadding="8" width="100%">
		<tr>
			<td colspan="<?php echo count($femaleSize)+1;?>">
				<h3>Pina 
					&nbsp;&nbsp;&nbsp;&nbsp; 
					-
					&nbsp;&nbsp;&nbsp;&nbsp;
					Top
				</h3>
			</td>
		</tr>
		<tr>
			<?php
				foreach($femaleSize as $fvalue)
				{
				?>
				<td><?php 
				$pina = $fvalue-2;
				if($pina == "-2")
				{
					$pina = "Size";
				}
				echo $pina;
				?></td>
				<?php
				}
			?>
			<td>
				<strong>Total</strong>
			</td>
		</tr>
		<tr>
			<?php
				$gsr = 0;
				foreach($femaleSize as $fvalue)
				{
				?>
				<td><?php echo $girlSizeValue[$gsr][$fvalue];?></td>
				<?php
				$gsr++;
				}
			?>
			<td>
				<strong><?php echo $girlTotal;?></strong>
			</td>	
		</tr>
	</table>
	<?php
	if($i<1)
	{
	echo "<hr />";
	}
	?>
	
	<?php
	}
	?>
	<?php
	$content = ob_get_contents();
	unset($_SESSION['cut_chart']);
	$_SESSION['cut_chart'] = $content;
	?>
	<form action="#" method="post">
		<center>
			<input type="submit" name="printchart" value="Print Cutting Chart" />
		</center>
	</form>
<?php	
}
?>

<?php
if(isset($_POST['printchart']))
{
	$content = $_SESSION['cut_chart'];
	include("mpdf/mpdf.php");
	$mpdf=new mPDF('win-1252','A4','','',2,1,2,2,10,10);
	$mpdf->useOnlyCoreFonts = true;    // false is default
	//$mpdf->SetProtection(array('print'));
	$mpdf->SetTitle("Shivam Dresses - Cutting Chart");
	$mpdf->SetAuthor("Shivam Dresses");

	
	$mpdf->showWatermarkText = true;
	$mpdf->watermark_font = 'DejaVuSansCondensed';
	$mpdf->watermarkTextAlpha = 0.1;
	$mpdf->SetDisplayMode('fullpage');

	$mpdf->WriteHTML($content);

//$filename = "cutting-chart/".rand(1111,9999)."_".rand(1111,9999)."_Cutting-Chart.pdf";
	$filename = "Cutting-Chart.pdf";
	$mpdf->Output($filename,'F');
	?>
	<script>
	window.location.assign("<?php echo $filename;?>");
	</script>
<?php
}
?>