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
	$selected_quantity = $_POST['quantity'];
}
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
        	Enter Quantity :
    	</td>
        <td>
			<?php
			$default_quantity = "1";
			if(isset($selected_quantity))
			{
				$default_quantity = $selected_quantity;
			}
			?>
        	<input type="text" name="quantity" value="<?php echo $default_quantity;?>" />
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
if(isset($_POST['invoice'])) {
	ob_start();
	$_quantity  = $_POST['quantity'];
	$school_name = $_POST['school'];
	$student_term = $_POST['term'];
	$school_id = $obj->getSchoolIdByName($school_name);
	$student_data = $obj->getStudentBySchoolIdCondition($school_id,$student_term);
	$school_data = $obj->getSingleShool($school_id);
	$rate_data = $obj->getRate($school_id,$student_term);
	$school_name = $school_data['school_name'];
	$school_address = $school_data['address'];
	$school_contactone = $school_data['contact_number'];
	$school_contacttwo = $school_data['other_contact'];
	$school_email = $school_data['emailid'];
	?>
   <?php
  
	foreach($student_data as $skey =>$value) {

		if($value[3] == "1") {
			if($value[5] == "Male") {
				$stdm[1][] = $value;
			}
			if($value[5] == "Female") {
				$stdf[1][] = $value;
			}
		}
		if($value[3] == "2") {
			if($value[5] == "Male") {
				$stdm[2][] = $value;
			}
			if($value[5] == "Female") {
				$stdf[2][] = $value;
			}
		}
		if($value[3] == "3") {
			if($value[5] == "Male") {
				$stdm[3][] = $value;
			}
			if($value[5] == "Female") {
				$stdf[3][] = $value;
			}
		}
		if($value[3] == "4") {
			if($value[5] == "Male") {
				$stdm[4][] = $value;
			}
			if($value[5] == "Female") {
				$stdf[4][] = $value;
			}
		}
		if($value[3] == "5") {
			if($value[5] == "Male") {
				$stdm[5][] = $value;
			}
			if($value[5] == "Female") {
				$stdf[5][] = $value;
			}
		}
		if($value[3] == "6") {
			if($value[5] == "Male") {
				$stdm[6][] = $value;
			}
			if($value[5] == "Female") {
				$stdf[6][] = $value;
			}
		}
		if($value[3] == "7") {
			if($value[5] == "Male") {
				$stdm[7][] = $value;
			}
			if($value[5] == "Female") {
				$stdf[7][] = $value;
			}
		}
		if($value[3] == "8") {
			if($value[5] == "Male") {
				$stdm[8][] = $value;
			}
			if($value[5] == "Female") {
				$stdf[8][] = $value;
			}
		}
		if($value[3] == "9") {
			if($value[5] == "Male") {
				$stdm[9][] = $value;
			}
			if($value[5] == "Female") {
				$stdf[9][] = $value;
			}
		}
		if($value[3] == "10") {
			if($value[5] == "Male") {
				$stdm[10][] = $value;
			}
			if($value[5] == "Female") {
				$stdf[10][] = $value;
			}
		}
		if($value[3] == "11") {
			if($value[5] == "Male") {
				$stdm[11][] = $value;
			}
			if($value[5] == "Female") {
				$stdf[11][] = $value;
			}
		}
		if($value[3] == "12") {
			if($value[5] == "Male") {
				$stdm[12][] = $value;
			}
			if($value[5] == "Female") {
				$stdf[12][] = $value;
			}
		}
		
	}
	?>

	
    <?php
	$invoice_num = "SH/".rand(1111,9999)."/".date('M')."/".date('Y');
	 $invoiceData .= '<html>
<head>
<style>
body {font-family: sans-serif;
    font-size: 10pt;
}
p {    margin: 0pt;
}
td { vertical-align: top; }
.items td {
    border-left: 0.1mm solid #000000;
    border-right: 0.1mm solid #000000;
}
table thead td { background-color: #EEEEEE;
    text-align: center;
    border: 0.1mm solid #000000;
}
.items td.blanktotal {
    background-color: #FFFFFF;
    border: 0mm none #000000;
    border-top: 0.1mm solid #000000;
    border-right: 0.1mm solid #000000;
}
.items td.totals {
    text-align: right;
    border: 0.1mm solid #000000;
}
</style>
</head>
<body>

<!--mpdf
<htmlpageheader name="myheader">
<table width="100%"><tr>
<td width="50%" style="color:#0000BB;"><span style="font-weight: bold; font-size: 14pt;">
	Shivam Dresses
</span><br />Opp, Post Office<br />Gheekanta Road , <br />Ahmedabad<br /><span style="font-size: 12pt;">&#9742;</span>079-65235816,98253 46597
<br>
Email : shivamdinesh67@gmail.com
</td>
<td width="50%" style="text-align: right;">Invoice No.<br /><span style="font-weight: bold; font-size: 12pt;">'.$invoice_num .'</span></td>
</tr></table>
</htmlpageheader>

<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; ">
*Apply to  Ahmebdad Juridiction - Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />
mpdf-->

<div style="text-align: right">Date: '.date('jS F Y').'</div>

<table width="100%" style="font-family: serif;" cellpadding="10">
<tr>
<td width="45%" style="border: 0.1mm solid #888888;"><span style="font-size: 7pt; color: #555555; font-family: sans;">SOLD TO:</span><br /><br />


'.$school_name.'<br />
'.$school_address.'<br />
'.$school_contactone.'<br />
'.$school_contacttwo.'<br />
'.$school_email .'</td>


<td width="10%">&nbsp;</td>
<td width="45%" style="border: 0.1mm solid #888888;"><span style="font-size: 7pt; color: #555555; font-family: sans;">From:</span><br /><br />
<strong>Shivam Dresses</strong><br />
<br />
<br />
</td>
</tr>
</table>';
	    $invoiceData .= '	
		
    <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="8">
<thead>
    <tr>
    <td width="10%">STANDARD.</td>
    <td width="25%">REF.TERM .</td>
    <td width="25%">DESCRIPTION</td>
    <td width="10%">QUANTITY</td>
    <td width="10%">TOTAL PIECES</td>
    <td width="10%">UNIT PRICE</td>
    <td width="10%">AMOUNT</td>
    </tr>
</thead>';
   
   	$total = 0;
	$totalBoys = 0 ;
	$totalGirls = 0 ;
	for($i=1;$i<=12;$i++ )
	{
	$price = 0;
	?>
    <?php
		if(count($stdm[$i]) > 0) {
			if($i < 5 ) {
			$cost = $rate_data['male_slab1'];
			}
			else if($i > 4 and $i < 9 ){
			$cost = $rate_data['male_slab2'];
			}
			else {
			$cost = $rate_data['male_slab3'];
			}
			$invoiceData .= '<tr>
			<td align="center">'.$i.'</td>
			<td align="center">'.$student_term.' - Boys </td>
			<td>PENTS / SHIRTS </td>
			<td align="center">'. count($stdm[$i]) . '&nbsp;&nbsp;  *&nbsp;&nbsp;    '.$_quantity.
			'<td align="center">'. $count = count($stdm[$i])  * $_quantity .'</td>'.
			'<td align="right">'.$cost.'</td>';
			$invoiceData .= '<td align="right">';
			$price = ($count * $cost) ;
			$invoiceData .= $price.'</td></tr>';
			$total =  $total + $price;	
			$totalBoys = $totalBoys + count($stdm[$i]);
		}
		
		if(count($stdf[$i]) > 0) {
			if($i < 5 ) {
			$cost = $rate_data['female_slab1'];
			}
			else if($i > 4 and $i < 9 ){
			$cost = $rate_data['female_slab2'];
			}
			else {
			$cost = $rate_data['female_slab3'];
			}
			$invoiceData .= '<tr>
			<td align="center">'.$i.'</td>
			<td align="center">'.$student_term.' - Girls </td>
			<td> SALWAR / PINA TOP </td>
			<td align="center">'. count($stdf[$i]) . '&nbsp;&nbsp;  * &nbsp;&nbsp;    '.$_quantity.'</td>
			<td align="center">'. $count = count($stdf[$i]) * $_quantity .'</td>
			<td align="right">'.$cost.'</td>';
			$invoiceData .= '<td align="right">';
			$price = ($count * $cost) ;
			$invoiceData .= $price.'</td></tr>';
			$total =  $total + $price;	
			$totalGirls = $totalGirls + count($stdf[$i]);
		}
	}
	$invoiceData .= '<tr>
					<td colspan="5" class="blanktotal"> </td>
					<td class="totals"><b>TOTAL:</b></td>
					<td class="totals"><b>'.$total.'</b></td>
					</tr>';
  $invoiceData .= '</table>';
  $invoiceData .= '<table width="100%"><tr><td colspan="2"><br><br></td></tr>';
  $invoiceData .= '<tr>';
  $invoiceData .= '<td width="50%" align="left">';
  $invoiceData .= "<h3>Boys : ".$totalBoys."</h3></td>";
  $invoiceData .= '<td width="50%" align="left">';
  $invoiceData .= "<h3>Girls : ". $totalGirls ."</h3></td>";
  $invoiceData .= '</tr>';
  $invoiceData .= '<tr>';
  $invoiceData .= '<td colspan="2"> <br><br><br> </td>';
  $invoiceData .= '</tr>';
  $invoiceData .= '<tr>';
  $invoiceData .= '<td width="50%" align="left">Reciever Signature : ___________________ </td>';
  $invoiceData .= '<td width="50%" align="right">Authorize Signature : ___________________ </td>';
 		
 $invoiceData .= '</tr></table>';

print $invoiceData;
?>
<form action="#" method="post">
	<?php 
	   $content = ob_get_contents(); 
	   unset($_SESSION['invoice_data']);
	   $_SESSION['invoice_data'] = $content;
	?>
    	
    	<input type="submit" name="inprint" value="Print Invoice" />
    </form>
<?php
}
?>
	
<?php
if(isset($_POST['inprint'])) {
ob_clean();
//$content = $_POST['content'];

$content = $_SESSION['invoice_data'];
unset($_SESSION['invoice_data']);
include("mpdf/mpdf.php");
$mpdf=new mPDF('win-1252','A4','','',20,15,48,25,10,10);
//$mpdf=new mPDF();
//$mpdf->SetFooter('*Apply to Ahmedabad Juridiction');
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