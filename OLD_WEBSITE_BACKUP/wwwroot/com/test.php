<?php
	$out = null;
	exec("C:\\Inetpub\\wwwroot\\availablePorts.exe", $out);
	exec("availablePorts.exe", $out);
	//echo $out;
?>