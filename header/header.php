<link rel="icon" type="/image/x-icon" href="/images/bulb.ico">
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<meta name="description" content="Fairfield County Filmss provides professional video services for various events including weddings, bithdays, ect."/>
<meta name="keywords" content="video, new fairfield, wedding, bar mitzfa, quality, birthday, cinema, dslr, slr, camcorder, videographer, danbury, ct, connecticut, new england"/>
<script src="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/css/ie/html5shiv.js"></script><![endif]-->
<script src="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/js/jquery.min.js"></script>
<script src="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/js/jquery.dropotron.min.js"></script>
<script src="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/js/skel.min.js"></script>
<script src="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/js/skel-layers.min.js"></script>
<script src="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/js/init.js"></script>
<!-- Video Light Box -->
<script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/html5lightbox/jquery.js"></script>
<script type="text/javascript" src="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/html5lightbox/html5lightbox.js"></script>

<noscript>
    <link rel="stylesheet" href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/css/skel.css"/>
    <link rel="stylesheet" href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/css/style.css"/>
    <link rel="stylesheet" href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/css/style-desktop.css"/>
</noscript>
<!--[if lte IE 8]>
        <!-- Version 8 -->
<link rel="stylesheet" href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/css/ie/v8.css"/>
<![endif]-->
<!--[if lte IE 9]>
        <!-- Version 9-->
<link rel="stylesheet" href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/css/ie/v9.css"/>
<![endif]-->

<script>
    //This is used to select the current tab
    function tab_selector() {
        var class_selector = "current_page_item";
        if (document.URL.search("index") !== -1) {
            document.getElementById("home_tab").className = class_selector;
        }
        else if (document.URL.search("about") !== -1) {
            document.getElementById("about_tab").className = class_selector;
        }
        else if (document.URL.search("package") !== -1) {
            document.getElementById("packages_tab").className = class_selector;
        }
        else if (document.URL.search("sample") !== -1) {
            document.getElementById("samples_tab").className = class_selector;
        }
        else if (document.URL.search("contact") !== -1) {
            document.getElementById("contact_tab").className = class_selector;
        }
    }
</script>

<?php include_once("analyticstracking.php") ?>