<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$object = new master;
	$id = $_REQUEST['id'];
	$status = $object->deleteSchool($id);
	if($status) {
		header("location:school_list.php");
	}
	else {
	echo "<center><h2>Error Occured School Not Deleted </h2></center>";
	}
?>