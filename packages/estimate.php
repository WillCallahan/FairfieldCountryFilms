<!DOCTYPE HTML>
<html>
    <head>
        <title>Fairfield County Films - Estimate Price</title>
        <script src="/js/cost-estimator.js"></script>

        <script>
            function requestPackage() {
                if (isNaN(parseFloat(document.getElementById("answer").value.replace("$", ""))) || document.getElementById("answer").value == "") {
                    document.getElementById("request_response").innerHTML = "Please select a valid package.";
                    return false
                }
                else {
                    document.getElementById("request").href = "/contact_us.php?custom=true&price=" + document.getElementById("answer").value.replace("$", "");
                    return true;
                }
            }
        </script>

		<?php include $_SERVER['DOCUMENT_ROOT'] . '/header/header.php'; ?>
    </head>
    <body class="homepage" onload="tab_selector();">

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
                            <div class="8u">
                                <div id="content">

                                    <!-- Content -->

                                    <article>
                                        <header class="major">
                                            <h2>Fairfield County Films</h2>
                                            <p>Leave it to the Pros</p>
                                        </header>

                                        <span class="image featured"><img src="/images/signing.jpg" alt=""/></span>

                                        <p>Everyone has there own price point but has different ideas of what they would
                                            like to
                                            get from a video
                                            service. Choose what you are looking for and what you think you may need for
                                            your
                                            day. <i>If these estimates
                                                still don't fit your budget, <a href="/contact_us.php"><b>contact us</b></a>
                                                and we will try to work out something better fitting of your budget.</i>
                                        </p>

                                        <h3>Estimator</h3>
                                        <p>Please fill out the following information based on what you are looking for
                                            in your
                                            video.</p>

                                        <form name="estimate" onsubmit="estimateCost();">
                                            <h4>Time</h4>
                                            <p>The time that we work for our clients begins when we start filming until
                                                we
                                                leave.
                                                This means that while we may be driving to a different location to a
                                                shoot, if
                                                we have
                                                begun to film, all time is counted until we are finished. Please make
                                                sure you
                                                take
                                                everything into consideration such as if you would like coverage at the
                                                bride
                                                and groom's
                                                house for preparations. </p>

                                            Start Time<br>
                                            <select style="float:left; width:33%; min-height: 40px;" name="startTimeHours">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                            <select style="width:33%; float:left; min-height: 40px;" name="startTimeMinutes">
                                                <option value="0">00</option>
                                                <option value="15">15</option>
                                                <option value="30">30</option>
                                                <option value="45">45</option>
                                            </select>
                                            <select style="width:33%; min-height: 40px;" name="startTimeAMPM">
                                                <option value="AM">AM</option>
                                                <option selected="selected" value="PM">PM</option>
                                            </select><br>

                                            End Time<br>
                                            <select style="float:left; width:33%; min-height: 40px;" name="endTimeHours">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                            <select style="width:33%; float:left; min-height: 40px;" name="endTimeMinutes">
                                                <option value="0">00</option>
                                                <option value="15">15</option>
                                                <option value="30">30</option>
                                                <option value="45">45</option>
                                            </select>
                                            <select style="width:33%; min-height: 40px;" name="endTimeAMPM">
                                                <option value="AM">AM</option>
                                                <option selected="selected" value="PM">PM</option>
                                            </select><br>

                                            DVD Copies<br>
                                            <input style="min-height: 40px;" type="text" value="2" name="dvdCopies"><br>

                                            Blu-Ray Copies<br>
                                            <input style="min-height: 40px;" type="text" value="1" name="bluCopies"><br>

                                            <div style="text-align:center;">
                                                <input stlyle="float:left; min-height: 40px;" type="checkbox" name="recap">Recap
                                                <input stlyle="margin-left: 25px; min-height: 40px;" type="checkbox" name="photoMon"> Photo Montage
                                                <input stlyle="margin-left: 25px; min-height: 40px;" type="checkbox" name="coverage"> 2 Camera Coverage <br/>
                                                <input stlyle="margin-left: 25px; min-height: 40px;" type="checkbox" name="photoBooth"> Photo Booth*
                                                <input stlyle="margin-left: 25px; min-height: 40px;" type="checkbox" name="usbBox"> Custom USB Box
                                                <sup><a href="/packages/estimate.php#sup2">2</a></sup>
                                                <input stlyle="margin-left: 25px; min-height: 40px;" type="checkbox" name="cc">Closed Captioning <sup><a href="/packages/estimate.php#sup3">3</a></sup>
                                                <br><br>
                                            </div>

                                            <div>
                                                <div style="float:left; margin-right:6px;">
                                                    <a onclick="calculateEstimate();" class="button icon fa-arrow-circle-o-right">Calculate</a>
                                                </div>
                                                <div style="float:right;"><input style="color:red; font-weight: bold; text-align: right; min-height: 40px;" type="text" id="answer" name="answer" readonly></div>
                                            </div>
                                            <br/>
                                            <br/>
                                            <div>
                                                <a id="request" onclick="return requestPackage();" style="margin-top:10px; float:right; diplay:block;" href="/contact_us.php" class="button icon fa-arrow-circle-o-right">Get This Package!</a>
                                            </div>
                                            <h4 id="request_response" style="margin-top:10px; color:red;"></h4>
                                        </form>
                                        <br><br><br>
                                        <p>* Please note that we only film the photobooth; we do not provide the photobooth<br/>
                                            <sup id="sup2">2</sup> This is a custom made box to store the digital media copy of your video in.<br/>
                                            <sup id="sup3">3</sup> We provide closed captioning for DVD's, BluRay's, and specific video formats. Please contact us for a more accurate estimate.
                                        </p>
                                    </article>

                                </div>
                            </div>
                            <div class="4u">
                                <div id="sidebar">

                                    <!-- Sidebar -->

                                    <section>
                                        <header class="major">
                                            <h2>Recap? What is It?</h2>
                                        </header>
                                        <p>The recap video shows the highlights of the day; show friends and family the best
                                            moments of your day without taking the time to watch the entire video. Choose from tons of
                                            artistic styles and pick your own music for us to match the video to. Its an addition that
                                            really makes the day.</p>
                                        <footer>
                                            <a href="#" class="button icon fa-info-circle">Find out more</a>
                                        </footer>
                                    </section>

                                    <section>
                                        <header class="major">
                                            <h2>Photobooth?</h2>
                                        </header>
                                        <p>We also offer the ability to discretely film everyone in a photobooth. Why is this
                                            important? You get to see everyone having a good time playing and putting on silly
                                            outfits. It gives you the chance to see some of the funnier parts of you day that you would have
                                            otherwise missed.</p>
                                    </section>

                                    <section>
                                        <header class="major">
                                            <h2>What's Free?</h2>
                                        </header>
                                        <p>With your purchase, you are entitled to these for free. Some of which most companies
                                            wont give out without a price!</p>
                                        <ul style="list-style-type: circle; margin-left:40px;">
                                            <li>One Blu Ray</li>
                                            <li>Two DVD's</li>
                                            <li>Digital Media Copy <sup><a href="/packages.php#Digital_Copy">1</a></sup>
                                            </li>
                                            <li>Custom Title Screen</li>
                                        </ul>

                                        <section>
                                            <header class="major">
                                                <h2>Samples</h2>
                                            </header>
                                            <ul class="style2">
                                                <li><a href="#">Recap Video</a></li>
                                            </ul>
                                            <footer>
                                                <a href="/samples.php" class="button icon fa-arrow-circle-o-right">More Samples</a>
                                            </footer>
                                        </section>

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