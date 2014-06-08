<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$object = new master;
?>
<?php
	$data = $_POST;

	$school = $data['school'];
	$person = $data['person'];
	$mob  = $data['mob'];
	$order = $data['order'];
	$color = $data['color'];
	
	$b1 = $data['b1'];
	$r1 = $data['r1'];
	$rm1 = $data['rm1'];
	
	$b2 = $data['b2'];
	$r2 = $data['r2'];
	$rm2 = $data['rm2'];
		
	$b3 = $data['b3'];
	$r3 = $data['r3'];
	$rm3 = $data['rm3'];
	
	$b4 = $data['b4'];
	
	
	
	$r4 = $data['r4'];
	$rm4 = $data['rm4'];
	
	$b5 = $data['b5'];
	$r5 = $data['r5'];
	$rm5 = $data['rm5'];

	$b6 = $data['b6'];
	$r6 = $data['r6'];
	$rm6 = $data['rm6'];
	
	$gtype = $data['gtype'];
	
	$fb1 = $data['fb1'];
	$fr1 = $data['fr1'];
	$frm1 = $data['frm1'];
	
	$fb2 = $data['fb2'];
	$fr2 = $data['fr2'];
	$frm2 = $data['frm2'];
	
	$fb3 = $data['fb3'];
	$fr3 = $data['fr3'];
	$frm3 = $data['frm3'];
	
	$fb4 = $data['fb4'];
	$fr4 = $data['fr4'];
	$frm4 = $data['frm4'];
	
	$fb5 = $data['fb5'];
	$fr5 = $data['fr5'];
	$frm5 = $data['frm5'];
	
	$fb6 = $data['fb6'];
	$fr6 = $data['fr6'];
	$frm6 = $data['frm6'];
	
	$date = $data['odate'];
	if(empty($date))
	{
	$date = "__________________";
	}
	$query = "INSERT INTO job_order
			 values
			 ('',
			  '$school','$person','$mob','$order','$color',
			  '$b1','$r1','$rm1',
			  '$b2','$r2','$rm2',
			  '$b3','$r3','$rm3',
			  '$b4','$r4','$rm4',
			  '$b5','$r5','$rm5',
			  '$b6','$r6','$rm6',
			  '$gtype',
			  '$fb1','$fr1','$frm1',
			  '$fb2','$fr2','$frm2',
			  '$fb3','$fr3','$frm3',
			  '$fb4','$fr4','$frm4',
			  '$fb5','$fr5','$frm5',
			  '$fb6','$fr6','$frm6',
			  'Created','$date',NOW()			  
			  )
			 ";
	
	$status = $object->query($query);
	
	if($status)
	{
	ob_start();
	?>
	<br><br><br><br>	
    <table align="center" border="1" rules="all" width="90%">
	<tr>
    	<td colspan="2" align="center" style='border:1px solid black;'>
        	<h1> Shivam Dresses Job Order </h1>
        </td>	
    </tr>
    <tr>
    	<td colspan="2"  style='border:1px solid black;' align="right">
        	<h2>Date : <?php echo $date;?></h2>
        </td>	
    </tr>
    <tr>
    	<td width="30%" style='border:1px solid black;'>
        	School Name :
        </td>
        <td width="70%" style='border:1px solid black;'>
        	<?php echo $school;?>
        </td>
    </tr>
    <tr>
    	<td  style='border:1px solid black;'>
        	Contact Person :
        </td>
        <td style='border:1px solid black;'>
			<?php echo $person;?>
        </td>
    </tr>
    <tr>
    	<td style='border:1px solid black;'> 
        	Mobile Number :
        </td>
        <td style='border:1px solid black;'>
        	<?php echo $mob;?>
        </td>
    </tr>
    
    <tr>
    	<td style='border:1px solid black;'>
        	Top & Shirt Order No. :
        </td>
        <td style='border:1px solid black;'>
        	<?php echo $order;?>
        </td>
    </tr>
    
    <tr>
    	<td style='border:1px solid black;'>
        	Matching Color :
        </td>
        <td style='border:1px solid black;'>
        	<?php echo $color;?>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        <hr />
        </td>
    </tr>
    
    <tr>
    	<td colspan="2" style='border:1px solid black;' width="100%">
        <h2>Boys</h2>
        </td>
    </tr>
    <tr>
    	<td colspan="2" width="100%" style='border:1px solid black;'>
        	<table align="center" border="1" rules="all" width="100%">
            	<tr>
                	<th>No.</th>
                    <th>Particulars</th>
                    <th>Option</th>
                    <th>Rate</th>
                    <th>Remarks</th>
                </tr>
                <tr>
                	<td style='border:1px solid black;' width="5%">1.</td>
                    <td style='border:1px solid black;' width="20%">Pents/Shirts</td>
                    <td style='border:1px solid black;' width="15%">
                    <label><input type="radio" name="b1" <?php if($b1 == 'Yes') echo "checked='checked'";?> value="Yes"/>Yes</label>
                    <label><input type="radio" name="b1" <?php if($b1 == 'No') echo "checked='checked'";?>value="No"/>No</label>
                    </td>
                    <td style='border:1px solid black;' width="20%">
                    	<?php echo $r1;?>
                    </td>
                    <td style='border:1px solid black;' width="40%">
                    	<?php echo $rm1;?>
                    </td>
                </tr>
                
                <tr>
                	<td style='border:1px solid black;'>2.</td>
                    <td style='border:1px solid black;'>Belt</td>
                    <td style='border:1px solid black;'>
                    <label><input type="radio" name="b2" <?php if($b2=='Yes') echo "checked='checked'";?> value="Yes"/>Yes</label>
                    <label><input type="radio" name="b2" <?php if($b2 == 'No') echo "checked='checked'";?>value="No"/>No</label>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $r2;?>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $rm2;?>
                    </td>
                </tr>
                
                 <tr>
                	<td style='border:1px solid black;'>3.</td>
                    <td style='border:1px solid black;'>I-Card</td>
                    <td style='border:1px solid black;'>
                    <label><input type="radio" name="b3" <?php if($b3 == 'Yes') echo "checked='checked'";?> value="Yes"/>Yes</label>
                    <label><input type="radio" name="b3" <?php if($b3 == 'No') echo "checked='checked'";?> value="No"/>No</label>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $r3;?>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $rm3;?>
                    </td>
                </tr>
                
                 <tr>
                	<td style='border:1px solid black;'>4.</td>
                    <td style='border:1px solid black;'>Tai</td>
                    <td style='border:1px solid black;'>
                    <label><input type="radio" name="b4" <?php if($b4 == 'Yes') echo "checked='checked'";?> value="Yes"/>Yes</label>
                    <label><input type="radio" name="b4" <?php if($b4 == 'No') echo "checked='checked'";?> value="No"/>No</label>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $r4;?>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $rm4;?>
                    </td>
                </tr>
                
                 <tr>
                	<td style='border:1px solid black;'>5.</td>
                    <td style='border:1px solid black;'>Shoes</td>
                    <td style='border:1px solid black;'>
                    <label><input type="radio" name="b5" <?php if($b5 == 'Yes') echo "checked='checked'";?> value="Yes"/>Yes</label>
                    <label><input type="radio" name="b5" <?php if($b5 =='No') echo "checked='checked'";?> value="No"/>No</label>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $r5;?>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $rm5;?>
                    </td>
                </tr>
                
                 <tr>
                	<td style='border:1px solid black;'>6.</td>
                    <td style='border:1px solid black;'>Photo</td>
                    <td style='border:1px solid black;'>
                    <label><input type="radio" name="b6" <?php if($b6 == 'Yes') echo "checked='checked'";?> value="Yes"/>Yes</label>
                    <label><input type="radio" name="b6" <?php if($b6 == 'No') echo "checked='checked'";?> value="No"/>No</label>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $r6;?>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $rm6;?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    
    <tr>
    	<td colspan="2" style='border:1px solid black;' width="100%">
        <h2>Girls</h2>
        </td>
    </tr>
    <tr>
    	<td colspan="2" width="100%" style='border:1px solid black;'>
        	<table align="center" border="1" rules="all" width="100%">
            	<tr>
                	<th>No.</th>
                    <th>
                   	Particulars
                    </th>
                    <th>Option</th>
                    <th>Rate</th>
                    <th>Remarks</th>
                </tr>
                <tr>
                	<td style='border:1px solid black;' width="5%">1.</td>
                    <td style='border:1px solid black;' width="15%"> <?php echo $gtype;?></td>
                    <td style='border:1px solid black;' width="20%">
                    <label><input type="radio" name="fb1" <?php if($fb1=='Yes') echo "checked='checked'";?> value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb1" <?php if($fb1=='No') echo "checked='checked'";?> value="No"/>No</label>
                    </td>
                    <td style='border:1px solid black;' width="20%">
                    	<?php echo $fr1;?>
                    </td>
                    <td style='border:1px solid black;' width="40%"> 
                    	<?php echo $frm1;?>
                    </td>
                </tr>
                
                <tr>
                	<td style='border:1px solid black;'>2.</td>
                    <td style='border:1px solid black;'>Belt</td>
                    <td style='border:1px solid black;'>
                    <label><input type="radio" name="fb2" <?php if($fb2=='Yes') echo "checked='checked'";?> value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb2" <?php if($fb2=='No') echo "checked='checked'";?> value="No"/>No</label>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $fr2;?>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $frm2;?>
                    </td>
                </tr>
                
                 <tr>
                	<td style='border:1px solid black;'>3.</td>
                    <td style='border:1px solid black;'>I-Card</td>
                    <td style='border:1px solid black;'>
                    <label><input type="radio" name="fb3" <?php if($fb3=='Yes') echo "checked='checked'";?> value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb3" <?php if($fb3=='No') echo "checked='checked'";?> value="No"/>No</label>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $fr3;?>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $frm3;?>
                    </td>
                </tr>
                
                 <tr>
                	<td style='border:1px solid black;'>4.</td>
                    <td style='border:1px solid black;'>Tai</td>
                    <td style='border:1px solid black;'>
                    <label><input type="radio" name="fb4" <?php if($fb4=='Yes') echo "checked='checked'";?> value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb4" <?php if($fb4=='No') echo "checked='checked'";?> value="No"/>No</label>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $fr4;?>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $frm4;?>
                    </td>
                </tr>
                

                 <tr>
                	<td style='border:1px solid black;'>5.</td>
                    <td style='border:1px solid black;'>Shoes</td>
                    <td style='border:1px solid black;'>
                    <label><input type="radio" name="fb5" <?php if($fb5=='Yes') echo "checked='checked'";?> value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb5" <?php if($fb5=='No') echo "checked='checked'";?> value="No"/>No</label>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $fr5;?>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $frm5;?>
                    </td>
                </tr>
                
                 <tr>
                	<td style='border:1px solid black;'>6.</td>
                    <td style='border:1px solid black;'>Photo</td>
                    <td style='border:1px solid black;'>
                    <label><input type="radio" name="fb6" <?php if($fb6=='Yes') echo "checked='checked'";?> value="Yes"/>Yes</label>
                    <label><input type="radio" name="fb6" <?php if($fb6=='No') echo "checked='checked'";?> value="No"/>No</label>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $fr6;?>
                    </td>
                    <td style='border:1px solid black;'>
                    	<?php echo $frm6;?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
	<td align="center" width="60%" >
        	<br><br><br><br><br><br><br>
        	<br><br><br><br><br><br><br>
        	<br><br><br>
        	School Stamp : _________________
		<br>
		<span style="font-size:9px;font-type:italic;">*Only for Labels Use</span>
        </td width="40%"> 
   		<td align="center">
            	<br><br><br><br><br><br><br>
        	<br><br><br><br><br><br><br>
        	<br><br><br>

            	Principle Signature : _________________
		<br>
		<span style="font-size:9px;font-type:italic;">*Only for I-Card Use</span>
        </td> 
    </tr>
</table>
<form action="#" method="post">
	<?php
	    $content = ob_get_contents(); 
		//$_SESSION['save_job_print'] = $content;
		require_once("mpdf/mpdf.php");
		$mpdf = new mPDF();
		$mpdf->SetHeader('Student Print');
		$mpdf->defaultheaderfontsize=20;
		$mpdf->SetFooter('{PAGENO}');
		$mpdf->WriteHTML($content);
		$mpdf->SetDisplayMode('fullpage');
		$mpdf->list_indent_first_level = 0;  
	//	$mpdf->Output();
		$filename = "jobs/".rand(1111,9999)."_".rand(1111,9999)."_Job_Order.pdf";
	$mpdf->Output($filename,'F');
	?>
	<script>
	window.location.assign("<?php echo $filename;?>");
	</script>
    <?php
	}

?>
 