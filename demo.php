	<?php
	require_once("mpdf/mpdf.php");
	
	$mpdf = new mPDF();
	//$content = file_get_contents("http://localhost/kush/school_chart.php");
	//echo "<pre>";
	//print_r($content);
	//die;
	$content = "testing";
	$mpdf->WriteHTML($content);
	
	$mpdf->Output();
	exit;
	?>