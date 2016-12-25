<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include $_SERVER['DOCUMENT_ROOT'].'/header/info.php';?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Conn Tech Solutions - Contact Page</title>
<meta name="keywords" content="Chrome, Contact, Web Design, CSS, HTML, free template" />
<meta name="description" content="Contact Chrome Web - free HTML CSS template from templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
		var button_select = "contact";
	</script>
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<script type="text/javascript">
	function validate() {
		var valid = true;
		document.getElementById("show-error").innerHTML = "";
		document.getElementById("name-input").innerHTML = "Name:";
		document.getElementById("name-input").style.color = "";
		document.getElementById("name-input").style.fontWeight = "";
		document.getElementById("email-input").innerHTML = "Email:";
		document.getElementById("email-input").style.color = "";
		document.getElementById("email-input").style.fontWeight = "";
		document.getElementById("message-input").innerHTML = "Message:";
		document.getElementById("message-input").style.color = "";
		document.getElementById("message-input").style.fontWeight = "";
		if (document.forms["contact"]["name"].value == null || document.forms["contact"]["name"].value == "") {
			document.getElementById("show-error").innerHTML += "* Please enter your name. <br />";
			document.getElementById("name-input").innerHTML = "* Name:";
			document.getElementById("name-input").style.color = "red";
			document.getElementById("name-input").style.fontWeight = "bold";
			valid = false;
		}
		if (document.forms["contact"]["email"].value == null || document.forms["contact"]["email"].value == "") {
			document.getElementById("show-error").innerHTML += "* Please enter your email. <br />";
			document.getElementById("email-input").innerHTML = "* Email:";
			document.getElementById("email-input").style.color = "red";
			document.getElementById("email-input").style.fontWeight = "bold";
			valid = false;
		}
		if (document.forms["contact"]["message"].value == null || document.forms["contact"]["message"].value == "") {
			document.getElementById("show-error").innerHTML += "* Please enter your message. <br />";
			document.getElementById("message-input").innerHTML = "* Message:";
			document.getElementById("message-input").style.color = "red";
			document.getElementById("message-input").style.fontWeight = "bold";
			valid = false;
		}
		return valid;
	}
	
	function checkReturn() {
		var parts = window.location.search.substr(1).split("&");
		var $_GET = {};
		for (var i = 0; i < parts.length; i++) {
			var temp = parts[i].split("=");
			$_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
		}
		if ($_GET['completed'] == true || $_GET['completed'] == "true") {
			document.getElementById("show-submit-return").style = "color: blue;";
			document.getElementById("show-submit-return").innerHTML = "Your message has been sent successfully!";
		}
		else if ($_GET['completed'] == false || $_GET['completed'] == "false") {
			document.getElementById("show-submit-return").style.color = "red";
			document.getElementById("show-submit-return").innerHTML = "An Error occured while sending your message!<br />Please try again later.";
		}
	}
	
	function resetForm() {
		document.getElementById("show-error").innerHTML = "";
		document.getElementById("name-input").innerHTML = "Name:";
		document.getElementById("name-input").style.color = "";
		document.getElementById("name-input").style.fontWeight = "";
		document.getElementById("email-input").innerHTML = "Email:";
		document.getElementById("email-input").style.color = "";
		document.getElementById("email-input").style.fontWeight = "";
		document.getElementById("message-input").innerHTML = "Message:";
		document.getElementById("message-input").style.color = "";
		document.getElementById("message-input").style.fontWeight = "";
	}
</script>

</head>
<body onload="checkReturn()">

<div id="templatemo_wrapper">

	<div id="templatemo_header">

        <?php include $_SERVER['DOCUMENT_ROOT'].'/header/main_buttons.php'; ?>
        
    </div> <!-- end of header -->
    
    <div id="templatemo_main">
    	<h2>Contact Us</h2>
        <div class="col_w630 float_l">
        	
             <div id="contact_form">
        
               <h4>Questions? We will get back to you ASAP.</h4>
                <h5 id="show-submit-return" style="color: blue;"></h5>
                <h6 id="show-error" style="color: red;"></h6>
                <form method="post" name="contact" onsubmit="return validate()" action="/subsite/contact/sendMessage.php">
                    <input type="hidden" name="post" value="Send" />
                    <label id="name-input" for="name">Name:</label> <input type="text" id="author" name="name" class="input_field" />
                    <div class="cleaner h10"></div>
                    
                    <label id="email-input" for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email input_field" />
                    <div class="cleaner h10"></div>
                    
                    <label id="message-input" for="message">Message:</label> <textarea style="max-width: 100%; max-height: 100%;" id="text" name="message" rows="0" cols="0"></textarea>
                    <div class="cleaner h10"></div>
                    
                    <input type="reset" class="submit_btn float_l" name="reset" onclick="resetForm()" id="reset" value="Reset" />
                    <input type="submit" class="submit_btn float_r" name="submit" id="submit" value="Send" />
                
                </form>
        
            </div> 
        </div>
        
        <div class="col_w300 float_r">
            <div class="col_fw">	
            <h4>Phone</h4>
                <h6> Web Design Studio</h6>
                New Fairfield, CT <br />
                Tel: (203) 942-9309<br />
            <br />
            </div>            
            <div class="col_fw_last">
                <h4><!--Our Location--></h4>
                <div id="map"></div>                
            </div>
        </div>
	    <div class="cleaner"></div>
    </div> <!-- end of main -->
</div>

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/footer/footer.php'; ?>
        <div class="cleaner"></div>
    </div>
</div> 
</body>
</html>