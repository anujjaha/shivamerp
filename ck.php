<?php
$username = $_POST['username'];
$password = $_POST['password'];


if($username == "kush" and $password == "kush") {
	session_start();
	$_SESSION['login'] = "true";
	$_SESSION['username'] = "Kush Chauhan";
	header("location:home.php");
}
else {
	header("location:index.php?status=404");
}
?>