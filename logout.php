<?php
	session_start();
	unset($_SESSION['login']);
	unset($_SESSION['username']);
	session_destroy();
?>
<head>
	<title>Inventory Managment Log Out Succesfully.
    </title>
</head>	
<body style="background:rgba(179,220,237,1);">
<center>
<h1>
	Succesfully Log Out
</h1>
	<a href="index.php">
    	Login Again
    </a>
</center>