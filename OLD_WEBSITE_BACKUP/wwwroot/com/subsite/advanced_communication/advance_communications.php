<html>
<head>
	<?php include $_SERVER['DOCUMENT_ROOT'].'../../header_info/header_data.php' ?>
	<style type="text/css">
		
	</style>
	<link rel="stylesheet" type="text/css" href="../../css/main_style.css">
	<?php include $_SERVER['DOCUMENT_ROOT'].'../../header_info/tracking.php' ?>
</head>
<body>
	<div id="headerwrap">
		<div id="header">
			<img src="../../pictures/wcp.png" align="left" hspace=2 vspace=5>
			<?php include $_SERVER['DOCUMENT_ROOT'].'/loginHeader.php'; ?>
			<h1 style="margin: 25px auto;">Welcome to WillCalli.com</h1>
		</div>
	</div>
	<div id="mainBox">
		<div id="titleLinks"><a class="linking" href="../../index.php">Home</a> | <a class="linking" href="advance_communications.php">Advanced Communications</a> | About</div>
		<hr /><!-- Break Line -->
		<div style="padding-top: .5cm; padding-bottom: 2cm; padding-left: 1cm; padding-right: 1cm;">
		<img src="pictures/serial_port.png" align="right" style="margin: -40 -30;">
		<dt>PIC16F1938</dt>
			<dd><p>In this exercise, we will be using the PIC16F1938. The PIC16F1938 is a great microcontroller for
			both practical and large programs as it is economical yet powerful, for an 8-bit microcontroller. A feature
			of this microcontroller if that it offers built in hardware for USART communications, including both the
			syncronous and asyncronous modes. In this example, we will be using the asycronous mode to communicate with the PIC.</p></dd>
		<dt>Serial Communication</dt>
			<dd><p>Serial Communication is a primative communication method that is still
			in use by computers today. You can check if your computer has a serial port by checking if your computer
			has a port that looks something like the male version of the picture to the right. Chances are that
			if you have a desktop, you will have a serial port. However, if you have a moder laptop, you will
			more than likely not have a serial port. If you do not have a serial port, you can purchase USART Serial
			Port converters for the USB ports on you computer.</p></dd>
		<dt>Asyncronous vs. Syncronous - What's the Difference?</dt>
			<dd><p>Simply asyncronous communication does not require a clock source where as syncronous communication
			does. Therefore, it is ususally much easier to implement asyncronous communications. However, the two methods
			do have their pros and cons.</p></dd>
						
	</div></div>
	<footer>
	  <p>Posted by: William Callahan</p>
	</footer>
</body>
</html>