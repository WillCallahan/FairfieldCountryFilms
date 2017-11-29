<!DOCTYPE HTML>
<html>
    <head>
        <title>Fairfield County Films - Terms</title>

        <script>
            function showContents(index) {
                if (document.getElementById("description_number_" + index).style.display == "none")
                    document.getElementById("description_number_" + index).style.display = "block";
                else
                    document.getElementById("description_number_" + index).style.display = "none";
                return false;
            }
        </script>

		<?php include $_SERVER['DOCUMENT_ROOT'] . '/header/header.php'; ?>
    </head>
    <body class="no-sidebar" onload="tab_selector();">

        <!-- Header Wrapper -->
        <div id="header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="12u">

						<?php include $_SERVER['DOCUMENT_ROOT'] . '/header/banner.php'; ?>

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
                            <div class="12u skel-cell-important">
                                <div id="content">

                                    <!-- Content -->

                                    <article>
                                        <header class="major">
                                            <h2>Messages</h2>
                                            <p>View messages from clients.</p>
                                        </header>

                                        <!--<span class="image featured"><img src="images/wedding_wide.jpg" alt="Wide Wedding Picture" /></span>-->

										<?php
										$files = scandir("requests");
										if (count($files) == 2)
											echo "<h4>No new messages.</h4>";
										else {
											for ($i = 0; $i < count($files) - 2; $i++) {
												if (i > 0)
													echo "<br>";
												echo "<h4><a href=\"requests/" . $files[$i + 2] . "\" id=\"file_number_" . $i . "\" onclick=\"return showContents(" . $i . ");\">Request " . $i . ": " . $files[$i + 2] . "</a></h4>";
												echo "<div style=\"display:none;\" id=\"description_number_" . $i . "\">" . nl2br(file_get_contents("requests/" . $files[$i + 2])) . "</div>";
												echo "<hr style=\"margin-top:30px; padding-top:0px;\">";
											}
											echo "<hr>";
										}
										?>

                                    </article>
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
							<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer/foot_banner.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Wrapper -->
        <div id="footer-wrapper">
            <footer id="footer" class="container">
				<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer/footer.php'; ?>
            </footer>
        </div>

    </body>
</html>