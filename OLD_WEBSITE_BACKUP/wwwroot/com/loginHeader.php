<?php
	$loggedIn = false;
	$username = "";
	if (isset($_COOKIE['username']))
		$username = $_COOKIE['username'];
	if (isset($_COOKIE['loggedIn']))
		$loggedIn = $_COOKIE['loggedIn'];
	if ($loggedIn == false)
		print("<a href=\"login/login.php\"><div style=\"text-align: right; float: right; color:white; margin: 20px 10px; text-decoration: none; \">LOGIN<br />HERE</div></a>");
	else {
		print("<a href=\"serial_communications/serial_communications.php\"><div style=\"text-align: right; float: right; color:white; margin: 20px 10px;\">$username<br />");
		//echo '<input type="submit" name="logout" value="Logout" style="font-family: /fonts/modernRegular; background:none; border-width:0px; color:white; text-decoration:underline;" /></div></a>';
		echo '
			<form action="/com/login/logout.php">
				<input type="hidden" name="logoutname" value="$username">
				<input type="hidden" name="logoutname" value="$username">
				<input type="submit" value="Logout">
			</form></div></a>';
	}
?>