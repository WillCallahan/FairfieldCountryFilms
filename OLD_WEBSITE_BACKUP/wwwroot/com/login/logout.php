<?php
	$loggedIn = false;
	$username = "";
	$password = "";
	$username = $_POST["username"]; 
	$password = $_POST["password"];
	setcookie('username', $username, (time() - (60 * 60)), '/');
	setcookie('password', $password, (time() - (60 * 60)), '/');
	setcookie('loggedIn', true, (time() - (60 * 60)), '/');
	header("location:../index.php");
?>