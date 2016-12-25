<html>
<head>
	<title>William Callahan's Website</title>
	<title>William Callahan's Website</title>
	<?php include $_SERVER['DOCUMENT_ROOT'].'../header_info/header_data.php' ?>
	<style type="text/css">
		
	</style>
	<?php
		$serDis = 'disabled';
		$serCon = '';
	?>
	<link rel="stylesheet" type="text/css" href="/css/main_style.css">
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
	<div id="mainBox" style="height:75%;">
		<div id="titleLinks"><a class="linking" href="/index.php">Home</a> | <a class="linking" href="/advance_communications.php">Advanced Communications</a> | About</div>
		<hr /><!-- Break Line -->
		<div style="padding-top: .5cm; padding-bottom: 2cm; padding-left: 1cm; padding-right: 1cm;"><h1 style="text-align:center; color:green; line-height:20%;">
			Serial Communication</h1></br>
			<textarea style="height:60%; resize: none; width: 100%;" name="console_text" form="comm_interface" readonly>
Please connect to a COM port...&#13;&#10;
			</textarea>
			<form id="comm_interface" style="float: right; padding-top: 25px" method="post">
				<div style="float: left; text-align:left;">
					Send to Comm Port: <input type="text" name="message"><input type="submit" value="Submit">
				</div>
				<select name="COMMPORT">
					<option value="COM1" name="COM1">COM1</option>
					<option value="COM2" name="COM2">COM2</option>
					<option value="COM3" name="COM3">COM3</option>
					<option value="COM4" name="COM4">COM4</option>
					<option value="COM5" name="COM5">COM5</option>
					<option value="COM6" name="COM6">COM6</option>
				</select>
				<?php
					echo '<button type="button" name="connect" value="' . $serCon . '" ' . $serCon . ' >Connect</button>';
					echo '<button type="button" name="disconnect" value="' . $serCon . '" ' . $serDis . ' >Disconnect</button>';
				?>
			</form>
		</div>
	</div>
	<footer>
	  <p>Posted by: William Callahan</p>
	</footer>
</body>
</html>