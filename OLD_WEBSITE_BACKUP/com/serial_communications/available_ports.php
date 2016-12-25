<?php
	exec( 'availablePorts.exe', $output);
	exec("http://willcalli.com/serial_communications/available_ports.exe", $output);
echo $output;
?>