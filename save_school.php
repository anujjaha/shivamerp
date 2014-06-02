<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
?>
<?php
$data = $_REQUEST;
$object = new master;
$status = $object->saveSchool($data);
if($status == 1 ) {
	header("location:school_list.php");
}
else {
	echo "<center><h2>Error Please Save School Again...</h2></center>";
}
?>