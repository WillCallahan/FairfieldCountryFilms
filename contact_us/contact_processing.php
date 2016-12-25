<?php
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$package = $_POST["package"];
	$message = $_POST["message"];
	$from = $firstname . " " . $lastname;
	$discount = $_POST["discount_post"];
	$dis_amount = $_POST["dis_am_post"]; //Discount amount if true
	$custom_price = $_POST["custom_price"];
	$budget = $_POST["budget"];
	
	if ($custom_price != 0) {
		$custom_price = "\nEstimated Cost: " . $custom_price;
	}
	else {
		$custom_price = "";
	}
	if ($budget != "")
		$budget = "\nBudget: " . $budget;
	else
		$budget = "";
	
	$logfile = fopen("C:\\inetpub\\wwwsecondary\\FairfieldCountyFilms\\requests\\" . date("D, d M Y H-i-s") . ".txt", "w") or handleSuccess(false);
	fwrite($logfile, "Name: " . $from ."\nPackage: " . $package . $custom_price . $budget . "\nDiscount: " . $dis_amount . "%" . "\nEmail:" . $email . "\nMessage: " . $message);
	fclose($logfile);
	handleSuccess(true);	


	mail("customerservice@conntechsolutions.com", $from, $message);

	function handleSuccess($performed) {
		if ($performed)
			header("Location: http://" . ($_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']) . "/contact_us.php?performed=true"); //Redirects to this page
		else {
			header("Location: http://" . ($_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']) . "/contact_us.php?performed=false");
			//die("An error occured while writing the message.");
		}
	}
?>