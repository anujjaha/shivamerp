<?php
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$obj = new master;
?>
<?php
$id = $_GET['id'];
$school_name = $_GET['school_name'];
$term = $_GET['term'];
$query  = "INSERT INTO students_bk  select * from student_details where id = '$id'";
$status = $obj->query($query);
if($status)
{
	$dquery = "DELETE FROM student_details where id = '$id'";
	$dstatus = $obj->query($dquery);
	if($dstatus)
	{
		$url = 'view_students.php?school='.$school_name.'&term='.$term.'&chart=true';
		echo "<script>window.location.assign('".$url."');</script>";
		//header('location:view_students.php');
	}
}
else {
	echo "<center></h1>Error Occur Student Not Deleted Please Try Again..</h1></center>";
}

?>

<?php
/*
	require_once ("lib/master.class.php");
	require_once ("menu.php");
	$obj = new master;
?>
<?php
$id = $_GET['id'];
$query  = "INSERT INTO students_bk  select * from student_details where id = '$id'";
$status = $obj->query($query);
if($status)
{
	$dquery = "DELETE FROM student_details where id = '$id'";
	$dstatus = $obj->query($dquery);
	if($dstatus)
	{
		echo "<script>window.location.assign('view_students.php');</script>";
		//header('location:view_students.php');
	}
}
else {
	echo "<center></h1>Error Occur Student Not Deleted Please Try Again..</h1></center>";
}
*/
?>
