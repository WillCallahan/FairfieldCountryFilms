<html>
<head>
	<title>William Callahan's Website</title>
	<?php include $_SERVER['DOCUMENT_ROOT'].'../header_info/header_data.php' ?>
	<style type="text/css">
		h2 {
			font-family: modernRegular;
			text-size: 110%;
			text-align: center;
		}
	</style>
	<?php
		$loggedIn = false;
	?>
	<link rel="stylesheet" type="text/css" href="../css/main_style.css">
	<?php include $_SERVER['DOCUMENT_ROOT'].'../header_info/tracking.php' ?>
</head>
<body>
	<div id="headerwrap">
		<div id="header">
			<img src="../pictures/wcp.png" align="left" hspace=2 vspace=5>
			<?php include $_SERVER['DOCUMENT_ROOT'].'../loginHeader.php'; ?>
			<h1 style="margin: 25px auto;">Welcome to WillCalli.com</h1>
		</div>
	</div>
	<div id="mainBox" style="height: 65%;">
		<div id="titleLinks"><a class="linking" href="../index.php">Home</a> | <a class="linking" href="../advance_communications.php">Advanced Communications</a> | About</div>
		<hr /><!-- Break Line -->
		<div style="padding-top: 0cm; padding-bottom: 2cm; padding-left: 1cm; padding-right: 1cm; color: green;">
			<?php
				if (!$loggedIn) {
					echo '
						<h2>Login:</h2>
						<center><h3>
						<form action="../check_login.php" method="post">
						Username:<input type="text" name="username"><br />
						Password:<input type="password" name="password"><br />
						<input type="submit" value="Login">
						</h3></center>
						</form>';
				}
				else
					echo "<b><h2>Log In Success!</h2></b>";
			?>
		</div>
	</div>
	<footer>
		<p>Posted by: William Callahan</p>
	</footer>
</body>
</html>