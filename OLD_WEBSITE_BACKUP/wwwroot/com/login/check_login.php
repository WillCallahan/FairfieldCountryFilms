<?php
	$con = mysql_connect("localhost","administrator","administrator", "website");
	mysql_select_db("website", $con);
	$loggedIn = false;
	$username = "";
	$password = "";
	$username = $_POST["username"]; 
	$password = $_POST["password"];
	$result = mysql_query("SELECT * FROM website.users WHERE username='$username' and password='$password'");
	if(mysql_num_rows($result) == 1){
		setcookie('username', $username, (time() + (60 * 60)));
		setcookie('password', $password, (time() + (60 * 60)));
		setcookie('loggedIn', true, (time() + (60 * 60)));
		header("location:/login_success.php");
	}
	else {
		echo "Username: " . $username . " Password: " . $password . "<br />";
		echo "Wrong Username or Password<br />";
	}
?>