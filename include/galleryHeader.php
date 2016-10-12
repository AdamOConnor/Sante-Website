<?php
/**
 * Created by PhpStorm.
 * User: Adam O'Connor
 * Date: 23/11/2015
 * Time: 21:15
 */
?>
<!DOCTYPE HTML>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="/./images/favicon.ico" sizes="32x32" />
    <link rel="icon" type="image/png" href="/./images/favicon-16x16.png" sizes="16x16" />
    <title>
        <?php
        if (isset($pageTitle)) {
            echo $pageTitle;
        } else {
            echo "Web Page";
        }
        ?>
    </title>
    <link href="/./css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <link href="/./css/jquery.mobile-1.4.5.min.css" rel="stylesheet" type="text/css" media="mobile">
    <script src="/./js/jquery-1.11.0.min.js"></script>
    
    <!-- Custom Theme files -->
    <link href="/./css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/./css/nav.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="sante fitness, lucan pilate's, lucan, exercise" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Squada+One' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900' rel='stylesheet' type='text/css'>

    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="/./js/move-top.js"></script>
    <script type="text/javascript" src="/./js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- //end-smoth-scrolling -->
    <link rel="stylesheet" type="text/css" href="/./css/style_common.css" />
    <link rel="stylesheet" type="text/css" href="/./css/style7.css" />
</head>
<body>
<!--banner start here-->
<div class="banner-two">
    <div class="header">
        <div class="container">
            <div class="header-main">
                <div class="logo">
                    <h1><a href="/./index.php"><img src="/./images/logo3.png" width="350" height="100"></a></h1>
                </div>
                <div class="top-nav">
                    <span class="menu"> <img src="/./images/icon.png" alt=""/></span>
                    <nav class="nav">
                        <ul class="res">
                            <li><a href="/./index.php">Home</a></li>
                            <li><a href="/./about.php">About</a></li>
                            <!--
                            <li><a href="./blog.php#blog">Blog</a></li>
                            --->
                            <li><a href="/./gallery.php">Gallery</a></li>
                            <li>
                                <a href="/./services.php">Services</a>
                                <ul>
                                    <li><a href="/./rent.php">Rent</a></li>
                                    <li><a href="/./timetable.php">Timetable</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="/./exerciseAdvice.php">Exercise Advice</a>
                                <ul>
                                    <li><a href="/./lifeStyle.php">Lifestyle</a></li>
                                    <li><a href="/./bmiCalculator.php">BMI Calculator</a></li>
                                    <li><a href="/./gallery.php">Gallery</a></li>
                                </ul>
                            </li>

                            <li><a href="/./contact.php">Contact</a></li>
                            <li><a href="/./test2.php">Location</a></li>
                        </ul>
                    </nav>
                    <!-- script-for-menu -->
                    <script>
                        $( "span.menu" ).click(function() {
                            $( "ul.res" ).slideToggle( 300, function() {
                                // Animation complete.
                            });
                        });
                    </script>
                    <!-- /script-for-menu -->
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!--banner end here-->
