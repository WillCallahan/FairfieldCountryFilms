<!DOCTYPE HTML>
<html>
    <head>
        <title>Fairfield County Films</title>
        <meta name="google-site-verification" content="5Nwr_cHdbBeuIZVenUAvCSFI9iXl0BhZKblwjE6WABw"/>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-67864943-1', 'auto');
            ga('send', 'pageview');

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

                        <!-- Banner -->
                        <div id="banner">
                            <h2><strong>Capture life's most precious moments.</strong></h2>
                            <p style="color:white">Book an event today and receive a<br>10% discount!</p>
                            <a href="contact_us.php?discount=true&dis_am=10" class="button big icon fa-check-circle">BOOK NOW</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Main Wrapper -->
        <div id="main-wrapper">
            <div class="wrapper style1">
                <div class="inner">

                    <!-- Feature 1 -->
                    <section class="container box feature1">
                        <div class="row">
                            <div class="12u">
                                <header class="first major">
                                    <h2>Build a video for your budget</h2>
                                    <p>You can choose from a wide variety of options which wont break the bank.</p>
                                </header>
                            </div>
                        </div>
                        <div class="row">
                            <div class="4u">
                                <section>
                                    <a href="packages.php#Standard" class="image featured"><img src="images/camera_church.jpg" alt=""/></a>
                                    <header class="second icon fa-user">
                                        <h3>STANDARD</h3>
                                        <p>Highlights of the day</p>
                                    </header>
                                </section>
                            </div>
                            <div class="4u">
                                <section>
                                    <a href="packages.php#Classic" class="image featured"><img src="images/the_works.jpg" alt=""/></a>
                                    <header class="second icon fa-cog">
                                        <h3>CLASSIC</h3>
                                        <p>+Full day Coverage</p>
                                    </header>
                                </section>
                            </div>
                            <div class="4u">
                                <section>
                                    <a href="packages.php#The_Works" class="image featured"><img src="images/editing.jpg" alt=""/></a>
                                    <header class="second icon fa-bar-chart-o">
                                        <h3>THE WORKS</h3>
                                        <p>+Special Editing</p>
                                    </header>
                                </section>
                            </div>
                        </div>
                        <div class="row">
                            <div class="12u">
                                <p>We offer several packages to suite the needs of most clients. Whether you chose
                                    the standard or the works, there will be no low quality product. If these packeges don't meet
                                    you needs, however, you can use our
                                    <strong><a href="/packages/estimate.php">cost estimator</a></strong> to decide what you think
                                    you need or not.</p>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
            <div class="wrapper style2">
                <div class="inner">

                    <!-- Feature 2 -->
                    <section class="container box feature2">
                        <div class="row">
                            <div class="6u">
                                <section>
                                    <header class="major">
                                        <h2>See our style</h2>
                                        <p>How could your video turn out?</p>
                                    </header>
                                    <p>We have several samples of our works available for show. We are not afraid to show you what
                                        we do and take any suggestions which you would like to see in your video.</p>
                                    <footer>
                                        <a href="samples.php" class="button medium icon fa-arrow-circle-right">View Samples</a>
                                    </footer>
                                </section>
                            </div>
                            <div class="6u">
                                <section>
                                    <header class="major">
                                        <h2>Customize your day</h2>
                                        <p>Estimate the cost of your day based on what <strong>you</strong> want</p>
                                    </header>
                                    <p>If you fee like any of the listed packages don't suite your exact needs, feel free to use the
                                        cost analysis calculator based off what you would like in your video.</p>
                                    <footer>
                                        <a href="/packages/estimate.php" class="button medium alt icon fa-arrow-circle-right">Estimate</a>
                                    </footer>
                                </section>
                            </div>
                        </div>
                    </section>

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