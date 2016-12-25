<!DOCTYPE HTML>
<html>
	<head>
		<title>Fairfield County Films - About US</title>
		<script type="text/javascript">
		function getValue(name) {
			name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
			var regexS = "[\\?&]"+name+"=([^&#]*)";
			var regex = new RegExp( regexS );
			var results = regex.exec( window.location.href );
			if( results == null )
				return "";
			else
				return results[1];
		}

		function showSuccess() {
			if (getValue("performed") == '' || (getValue("performed") == undefined));
			else if (getValue("performed") == 'true')
				document.getElementById("show_success").innerHTML += "Message Success";
			else
				document.getElementById("show_error").innerHTML += "Message Failure. Please Try Again.";
		}

		function validate() {
			var valid = true;
			document.getElementById("show_error").innerHTML = "";
			document.getElementById("first_name_label").style.color = "#626161";
			document.getElementById("first_name_label").style.fontWeight = "normal";
			document.getElementById("last_name_label").style.color = "#626161";
			document.getElementById("last_name_label").style.fontWeight = "normal";
			document.getElementById("email_label").style.color = "#626161";
			document.getElementById("email_label").style.fontWeight = "normal";
			document.getElementById("message_label").style.color = "#626161";
			document.getElementById("message_label").style.fontWeight = "normal";
			if (document.forms["contact_info"]["firstname"].value == undefined || document.forms["contact_info"]["firstname"].value == "") {
				document.getElementById("show_error").innerHTML += "* Must Enter First Name<br />";
				document.getElementById("first_name_label").style.color = "red";
				document.getElementById("first_name_label").style.fontWeight = "bold";
				valid = false;
			}
			if (document.forms["contact_info"]["lastname"].value == undefined || document.forms["contact_info"]["lastname"].value == "") {
				document.getElementById("show_error").innerHTML += "* Must Enter First Name<br />";
				document.getElementById("last_name_label").style.color = "red";
				document.getElementById("last_name_label").style.fontWeight = "bold";
				valid = false;
			}
			if (document.forms["contact_info"]["message"].value == undefined || document.forms["contact_info"]["message"].value == "") {
				document.getElementById("show_error").innerHTML += "* Must Enter a Message<br />";
				document.getElementById("message_label").style.color = "red";
				document.getElementById("message_label").style.fontWeight = "bold";
				valid = false;	
			}
			if (document.forms["contact_info"]["email"].value == undefined || document.forms["contact_info"]["email"].value == "") {
				document.getElementById("show_error").innerHTML += "* Must Enter Email<br />";
				document.getElementById("email_label").style.color = "red";
				document.getElementById("email_label").style.fontWeight = "bold";
				valid = false;	
			}
			else if (!ValidateEmail(document.forms["contact_info"]["email"].value)) {
				document.getElementById("show_error").innerHTML += "* Must Enter a Valid Email<br />";
				document.getElementById("email_label").style.color = "red";
				document.getElementById("email_label").style.fontWeight = "bold";
				valid = false;	
			}
			return valid;
		}
		function ValidateEmail(mail) { 
			if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
				return true;
			else
				return false;
		}
		function checkDiscount() {
			if (getValue("discount") == "true") {
				document.getElementById("discount").innerHTML = "* Discount of " + getValue("dis_am") + "% has been applied!";
				document.getElementById("discount_post").value = true;
				document.getElementById("dis_am_post").value = getValue("dis_am");
			}
		}
		function checkCustom() {
			if (getValue("custom") == "true") {
				document.getElementById("custom_price_label").style.display = "block";
				document.getElementById("custom_price").style.display = "block";
				document.getElementById("custom_price").value = getValue("price");
				document.getElementById("package").selectedIndex = 4;
				document.getElementById("package").disabled = true;
				document.getElementById("extra_space").innerHTML = "<br />";
				document.getElementById("budget_label").style.display = "none";
				document.getElementById("budget").style.display = "none";
			}
		}
		function addBudget() {
			if (document.getElementById("package").selectedIndex == 0 || (document.getElementById("package").selectedIndex == 4 && getValue("custom") != "true")) {
				document.getElementById("budget_label").style.display = "block";
				document.getElementById("budget").style.display = "block";
			}
			else {
				document.getElementById("budget_label").style.display = "none";
				document.getElementById("budget").style.display = "none";
			}
		}
	</script>

		<?php include $_SERVER['DOCUMENT_ROOT'].'/header/header.php'; ?>
	</head>
	<body class="homepage" onload="tab_selector(); showSuccess(); checkDiscount(); checkCustom();">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<?php include $_SERVER['DOCUMENT_ROOT'].'/header/banner.php'; ?>

						</div>
					</div>
				</div>
			</div>
		
		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="wrapper style2">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="8u">
									<div id="content">

										<!-- Content -->
									
											<article>
												<header class="major">
													<h2>Contact Us</h2>
													<p>Questions or Special Requests?</p>
												</header>
												
												<span class="image featured"><img src="/images/signing.jpg" alt="" /></span>

												<p>Please fill out the following form to contact us.</p>
												
												<h4 id="discount" style="-webkit-margin-before: 0px; -webkit-margin-after: 0px; color: #478FB2;"></h4>
												
												<h4 id="show_success" style="-webkit-margin-before: 0px; -webkit-margin-after: 0px; color: #478FB2;"></h4>
										                <h5 id="show_error" style="-webkit-margin-before: 0; color: red;"></h5>

												<form name="contact_info" onsubmit="return validate();" method="post" action="contact_us/contact_processing.php">
													<input type="hidden" id="discount_post" name="discount_post" value="false" />
													<input type="hidden" id="dis_am_post" name="dis_am_post" value="0" />
													<label id="first_name_label">First Name: </label><input autocomplete="off" type="text" style="min-height: 40px;" name="firstname"><br>
													<label id="last_name_label">Last Name: </label><input autocomplete="off" type="text" style="min-height: 40px;" name="lastname"><br>
													<label id="email_label">Email: </label><input autocomplete="off" type="text" style="min-height: 40px;" name="email"><br>
													<label id="package_type_label">Select Package Type: </label>
													<select id="package" name="package" onclick="addBudget();" style="min-height: 40px;">

														<option value="0">Undecided</option>
														<option value="1">Standard</option>
														<option value="2">Classic</option>
														<option value="3">The Works</option>
														<option value="4">Custom</option>

													</select><br>
													<label id="budget_label">Budget:</label><input autocomplete="off" style="margin-bottom:25px;" id="budget" type="text" style="min-height: 40px;" name="budget">
													<label style="display:none;" id="custom_price_label" name="custom_price_label">Estimated Price:</label><input id="custom_price" name="custom_price" style="display:none;" autocomplete="off" type="text" value="0" readonly>
													<div id="extra_space"></div>
													<label id="message_label">Your Message:</label><textarea style="resize: vertical;" name="message"></textarea><br>
													<input type="submit" alt="Send Message" value="Submit" />

												</form>
												
											</article>
								
									</div>
								</div>
								<div class="4u">
									<div id="sidebar">

										<!-- Sidebar -->
									
											<section>
												<header class="major">
													<h2>Contact Information</h2>
												</header>
												<p>William Callahan<br>
												Cofounder<br>
												customerservice@fairfieldcountyfilms.com<br>
												203-942-9309<br>
												<br>
												Mark Balestra<br>
												Cofounder<br>
												customerservice@fairfieldcountyfilms.com<br>
												484-319-1358<br>
												<footer>
													<a href="mailto:customerservice@Fairfield County Films.com?Subject=Video%20Service%20Request" class="button icon fa-arrow-circle-o-right">Email</a>
												</footer>
											</section>

											<!--
											<section>
												<<header class="major">
													<h2>Subheading</h2>
												</header>
												<ul class="style2">
													<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
													<li><a href="#">Ornare in hendrerit in lectus</a></li>
													<li><a href="#">Semper mod quis eget mi dolore</a></li>
													<li><a href="#">Quam turpis feugiat sit dolor</a></li>
													<li><a href="#">Amet ornare in hendrerit in lectus</a></li>
													<li><a href="#">Semper mod quisturpis nisi</a></li>
													<li><a href="#">Consequat etiam lorem phasellus</a></li>
													<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
													<li><a href="#">Semper mod quisturpis nisi</a></li>
												</ul>
												<footer>
													<a href="#" class="button icon fa-arrow-circle-o-right">Do Something</a>
												</footer>
											</section>
											-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wrapper style3">
					<div class="inner">
						<div class="container">
							<div class="row">
								<?php include $_SERVER['DOCUMENT_ROOT'].'/footer/foot_banner.php'; ?>
							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				<footer id="footer" class="container">
					<?php include $_SERVER['DOCUMENT_ROOT'].'/footer/footer.php'; ?>
				</footer>
			</div>

	</body>
</html>