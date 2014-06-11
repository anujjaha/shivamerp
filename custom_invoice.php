<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$obj = new master;
	$schoolList = $obj->getSchoolList();
	$termList = $obj->getTermList();
?>
<center>
	<h1 class="home">
    	Custom Invoice
    </h1>
</center>
<?php
if(!isset($_POST['invoice']))
{
?>
<table align="center" border="2" width="80%">
<form action="#" method="POST">
	<tr>	
    	<td align="center" colspan="2">
        	<h2> Generate Invoice </h2>
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
        	<input type="submit" name="invoice" value="Generate Invoice" />
        </td>
   </tr>
</form>   
</table>
<?php
}
?>
<?php
if(isset($_POST['invoice']))
{
	$school_name = $_POST['school'];
	$student_term = $_POST['term'];
	$school_id = $obj->getSchoolIdByName($school_name);
	$school_data = $obj->getSingleShool($school_id);
	$school_address = $school_data['address'];
	$school_contactone = $school_data['contact_number'];
	$school_contacttwo = $school_data['other_contact'];
	$school_email = $school_data['emailid'];
?>
<script type="text/javascript">
function total(id)
{
	var qtyid = "quantity["+id+"]";
	var rateid = "rate["+id+"]";
	var particularid = "particular["+id+"]";
	var subtotalid = "total["+id+"]";
	var particular = document.getElementById(particularid).value;
	var qty = document.getElementById(qtyid).value;
	var rate = document.getElementById(rateid).value;
	var subtotal;
	subtotal =  parseFloat(qty) * parseFloat(rate); 
	if(particular != "")
	{
		if(parseFloat(subtotal))
		{
		document.getElementById(subtotalid).value = subtotal;
		}
		else
		{
			alert("Please Provide Quantity And Rate in Digits Only");
			return false;
		}
	}
}
</script>
<?php
$school_name = $_POST['school'];
?>
<table align="center" border="2" width="80%">
	<tr>
		<td align="center" colspan="2">  
		<h2>
			School Name : <?php echo $school_name;?> 
			</h2>
		</td>
	</tr>
	<tr>
		<td>
			<strong>Term : <?php echo $student_term;?></strong>
		</td>
		<td align="right">
			<strong>Date: <?php echo date('jS F Y');?></strong>
		</td>
	</tr>
	
</table>
<script>
function check()
{
	var key = document.getElementById("key").value;
	var skey = document.getElementById("skey").value;
	if(key != skey)
	{
		alert("Please Valid Provide Security Key");
		document.getElementById("key").focus();
		return false;
	}
	else if (key == "")
	{
		alert("Please Provide Security Key");
		document.getElementById("key").focus();
		return false;
	}
	else
	{
		return true;
	}
}
</script>
<table align="center" border="2" width="80%">
<form action="#" method="post" onsubmit="return check();">
	<tr>
		<th>
			Sr.
		</th>
		<th>
			Particulars
		</th>
		<th>
			Quantity
		</th>
		<th>
			Rate
		</th>
		<th>
			Total
		</th>
	</tr>
	
	<tr>	
		<td  width="5%">1</td>
		<td width="60%">
			<input type="text" name="item1" id="particular[1]" style="width:450px;" />
		</td>
		<td  width="10%">
			<input type="text" name="quantity1" id="quantity[1]" />
		</td>
		<td  width="10%">
			<input type="text" name="rate1" id="rate[1]" onblur="return total(1)" />
		</td>
		<td  width="15%">
			<input type="text" name="total1" id="total[1]" />
		</td>
	</tr>
	
	<tr>	
		<td  width="5%">2</td>
		<td width="60%">
			<input type="text" name="item2" id="particular[2]" style="width:450px;" />
		</td>
		<td  width="10%">
			<input type="text" name="quantity2" id="quantity[2]" />
		</td>
		<td  width="10%">
			<input type="text" name="rate2" id="rate[2]" onblur="return total(2)" />
		</td>
		<td  width="15%">
			<input type="text" name="total2" id="total[2]" />
		</td>
	</tr>
	
	<tr>	
		<td  width="5%">3</td>
		<td width="60%">
			<input type="text" name="item3" id="particular[3]" style="width:450px;" />
		</td>
		<td  width="10%">
			<input type="text" name="quantity3" id="quantity[3]" />
		</td>
		<td  width="10%">
			<input type="text" name="rate3" id="rate[3]" onblur="return total(3)" />
		</td>
		<td  width="15%">
			<input type="text" name="total3" id="total[3]" />
		</td>
	</tr>
	
	<tr>	
		<td  width="5%">4</td>
		<td width="60%">
			<input type="text" name="item4" id="particular[4]" style="width:450px;" />
		</td>
		<td  width="10%">
			<input type="text" name="quantity4" id="quantity[4]" />
		</td>
		<td  width="10%">
			<input type="text" name="rate4" id="rate[4]" onblur="return total(4)" />
		</td>
		<td  width="15%">
			<input type="text" name="total4" id="total[4]" />
		</td>
	</tr>
	
	<tr>	
		<td  width="5%">5</td>
		<td width="60%">
			<input type="text" name="item5" id="particular[5]" style="width:450px;" />
		</td>
		<td  width="10%">
			<input type="text" name="quantity5" id="quantity[5]" />
		</td>
		<td  width="10%">
			<input type="text" name="rate5" id="rate[5]" onblur="return total(5)" />
		</td>
		<td  width="15%">
			<input type="text" name="total5" id="total[5]" />
		</td>
	</tr>
	
	<tr>	
		<td  width="5%">6</td>
		<td width="60%">
			<input type="text" name="item6" id="particular[6]" style="width:450px;" />
		</td>
		<td  width="10%">
			<input type="text" name="quantity6" id="quantity[6]" />
		</td>
		<td  width="10%">
			<input type="text" name="rate6" id="rate[6]" onblur="return total(6)" />
		</td>
		<td  width="15%">
			<input type="text" name="total6" id="total[6]" />
		</td>
	</tr>
	
	<tr>	
		<td  width="5%">7</td>
		<td width="60%">
			<input type="text" name="item7" id="particular[7]" style="width:450px;" />
		</td>
		<td  width="10%">
			<input type="text" name="quantity7" id="quantity[7]" />
		</td>
		<td  width="10%">
			<input type="text" name="rate7" id="rate[7]" onblur="return total(7)" />
		</td>
		<td  width="15%">
			<input type="text" name="total7" id="total[7]" />
		</td>
	</tr>
	
	<tr>	
		<td  width="5%">8</td>
		<td width="60%">
			<input type="text" name="item8" id="particular[8]" style="width:450px;" />
		</td>
		<td  width="10%">
			<input type="text" name="quantity8" id="quantity[8]" />
		</td>
		<td  width="10%">
			<input type="text" name="rate8" id="rate[8]" onblur="return total(8)" />
		</td>
		<td  width="15%">
			<input type="text" name="total8" id="total[8]" />
		</td>
	</tr>
	
	<tr>	
		<td  width="5%">9</td>
		<td width="60%">
			<input type="text" name="item9" id="particular[9]" style="width:450px;" />
		</td>
		<td  width="10%">
			<input type="text" name="quantity9" id="quantity[9]" />
		</td>
		<td  width="10%">
			<input type="text" name="rate9" id="rate[9]" onblur="return total(9)" />
		</td>
		<td  width="15%">
			<input type="text" name="total9" id="total[9]" />
		</td>
	</tr>
	
	<tr>	
		<td  width="5%">10</td>
		<td width="60%">
			<input type="text" name="item10" id="particular[10]" style="width:450px;" />
		</td>
		<td  width="10%">
			<input type="text" name="quantity10" id="quantity[10]" />
		</td>
		<td  width="10%">
			<input type="text" name="rate10" id="rate[10]" onblur="return total(10)" />
		</td>
		<td  width="15%">
			<input type="text" name="total10" id="total[10]" />
		</td>
	</tr>
	
	<tr>	
		<td  width="5%">11</td>
		<td width="60%">
			<input type="text" name="item11" id="particular[11]" style="width:450px;" />
		</td>
		<td  width="10%">
			<input type="text" name="quantity11" id="quantity[11]" />
		</td>
		<td  width="10%">
			<input type="text" name="rate11" id="rate[11]" onblur="return total(11)" />
		</td>
		<td  width="15%">
			<input type="text" name="total11" id="total[11]" />
		</td>
	</tr>
	
	
	<tr>	
		<td  width="5%">12</td>
		<td width="60%">
			<input type="text" name="item12" id="particular[12]" style="width:450px;" />
		</td>
		<td  width="10%">
			<input type="text" name="quantity12" id="quantity[12]" />
		</td>
		<td  width="10%">
			<input type="text" name="rate12" id="rate[12]" onblur="return total(12)" />
		</td>
		<td  width="15%">
			<input type="text" name="total12" id="total[12]" />
		</td>
	</tr>
	
	<tr>	
		<td  width="5%">13</td>
		<td width="60%">
			<input type="text" name="item13" id="particular[13]" style="width:450px;" />
		</td>
		<td  width="10%">
			<input type="text" name="quantity13" id="quantity[13]" />
		</td>
		<td  width="10%">
			<input type="text" name="rate11" id="rate[13]" onblur="return total(13)" />
		</td>
		<td  width="15%">
			<input type="text" name="total11" id="total[13]" />
		</td>
	</tr>
	
	
	<tr>	
		<td  width="5%">14</td>
		<td width="60%">
			<input type="text" name="item14" id="particular[14]" style="width:450px;" />
		</td>
		<td  width="10%">
			<input type="text" name="quantity14" id="quantity[14]" />
		</td>
		<td  width="10%">
			<input type="text" name="rate14" id="rate[14]" onblur="return total(14)" />
		</td>
		<td  width="15%">
			<input type="text" name="total14" id="total[14]" />
		</td>
	</tr>
	
	<tr>	
		<td  width="5%">15</td>
		<td width="60%">
			<input type="text" name="item15" id="particular[15]" style="width:450px;" />
		</td>
		<td  width="10%">
			<input type="text" name="quantity15" id="quantity[15]" />
		</td>
		<td  width="10%">
			<input type="text" name="rate15" id="rate[15]" onblur="return total(15)" />
		</td>
		<td  width="15%">
			<input type="text" name="total15" id="total[15]" />
		</td>
	</tr>
	
	<tr>
		<td colspan="2" align="right">
			Security Key :
		</td>
		<td colspan="3">
			<font style="color:#FF0000; font-size:18px; font-weight:bold;">
			<?php $key = rand(1,9);
			echo $key;?>
			</font>
			<input type="text" name="key" id="key" />
		</td>
	</tr>
	
	<tr>
		<td colspan="5" align="center">
			<input type="hidden" name="school_name" value="<?php echo $school_name;?>" />
			<input type="hidden" name="skey" id="skey" value="<?php echo $key;?>" />
			<input type="submit" name="print_invoice" value="Print Invoice" />
		</td>
	</tr>
</form>
</table>
<?php
}
?>

<?php
if(isset($_POST['print_invoice']))
{
$data = $_POST;
	$school_name = $data['school_name'];
	$school_id = $obj->getSchoolIdByName($school_name);
	$school_data = $obj->getSingleShool($school_id);
	$school_name = $school_data['school_name'];
	$school_address = $school_data['address'];
	$school_contactone = $school_data['contact_number'];
	$school_contacttwo = $school_data['other_contact'];
	$school_email = $school_data['emailid'];
?>
<?php
$print = '
<table align="center" border="2" width="100%">
	<tr>
		<td width="45%" >
			<h4>Shivam Dresses </h4>
			<h5>
			Opp, Post Office,
			<br />
			Gheekanta Road,
			<br />
			Ahmedabad
			<br />
			Office : 079-65235816
			<br />
			Mobile : 98253 46597
			<br />
			Email : shivamdinesh67@gmail.com
			</h5>
		</td>
		
		<td width="10%">
			&nbsp;
		</td>
		
		<td width="45%" align="right">
		<h5>
			Invoice No.
			</h5>
			<h3>
			';
			$invoice_num = "SH/".rand(1111,9999)."/".date('M')."/".date('Y');
			$print .=  $invoice_num; 
			$print .= '
			<br /><br />
			</h3>
			<h5>
			Date : '.date('jS F Y').'
			</h5>
		</td>
	</tr>
</table>
<br /><br /><br /><br />

<table align="center" border="2">
<tr>
		<td colspan="2"  style="border: 0.1mm solid #888888;">
		<span style="font-size:11px;">SOLD TO :</span>
		<span style="font-size:14px;">
		<br />
		'.$school_name .'
		<br />
		'. $school_address .'
		<br />
		'.$school_contactone .'
		<br />
		'.$school_email .'
		</span>
		</td>
		<td colspan="3"  style="border: 0.1mm solid #888888;">
			<span style="font-size:11px;">From :</span>
			<center>
			<span style="font-size:14px;">
			Shivam Dresses
			</span>
			</center>
		</td>
	</tr>
	<tr>
		<th  style="border: 0.1mm solid #888888;">Sr.</th>
		<th  style="border: 0.1mm solid #888888;">Particular</th>
		<th  style="border: 0.1mm solid #888888;">Quantity</th>
		<th style="border: 0.1mm solid #888888;">Rate</th>
		<th style="border: 0.1mm solid #888888;">Total</th>
	</tr>';

$grandTotal = 0;
for($i = 1 ;$i <= 15 ;$i++)
{
$item = "item".$i;
$quantity = "quantity".$i;
$rate = "rate".$i;
$total = "total".$i;

	$print .= '<tr>';
	$print .= '<td  style="border: 0.1mm solid #888888;" width="5%">'  . $i .' </td>';
	$print .= '<td style="border: 0.1mm solid #888888;" width="60%">' .$data[$item] .'</td>';
	$print .= '<td style="border: 0.1mm solid #888888;" width="10%">' . $data[$quantity] .'</td>';
	$print .= '<td style="border: 0.1mm solid #888888;" width="10%">' . $data[$rate]. '</td>';
	$print .= '<td align="right" style="border: 0.1mm solid #888888;" width="15%"> '. $data[$total] .'</td>';
	$print .= '</tr>';
	$grandTotal = $grandTotal + $data[$total];
}

$print .=' 
<tr>	
	<td colspan="4" style="border: 0.1mm solid #000000;" align="right">
		<h3>Grand Total :</h3>
	</td>
	<td style="border: 0.1mm solid #000000;" align="right">
		<h3> '. $grandTotal . '</h3>
	</td>
</tr>
</table>';
$print .=' 
<table align="center" border="0" width="100%">
<tr>	
	<td  align="center" width="50%">
	<br><br><br><br><br><br><br><br>
		Receiver Signature : ______________________
		<br>
		&nbsp;
	</td>
	<td  width="50%" align="center">
	<br><br><br><br><br><br><br><br>
		Authorized Signature : ____________________
		<br>
		&nbsp;
	</td>
</tr>
</table>';
echo $print;
$content = $print;
include("mpdf/mpdf.php");
$mpdf=new mPDF('win-1252','A4','','',10,15,25,25,10,10);
//$mpdf=new mPDF();
$mpdf->SetFooter('*Apply to Ahmedabad Juridiction Page {PAGENO} of {nb}');
$mpdf->useOnlyCoreFonts = true;    // false is default
$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Shivam Dresses - Invoice");
$mpdf->SetAuthor("Shivam Dresses");
$mpdf->SetWatermarkText("Shivam");

$mpdf->showWatermarkText = true;
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->SetDisplayMode('fullpage');

$mpdf->WriteHTML($content);
//$mpdf->Output(); 
$filename = "invoice/".rand(1111,9999)."_".rand(1111,9999)."_Invoice.pdf";
	$mpdf->Output($filename,'F');
	?>
	<script>
	window.location.assign("<?php echo $filename;?>");
	</script>
	<?php
	}
	?>
