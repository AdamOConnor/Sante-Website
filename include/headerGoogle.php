<?php
/**
 * Created by PhpStorm.
 * User: Adam O'Connor
 * Date: 23/11/2015
 * Time: 22:00
 */
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="./images/favicon.ico" sizes="32x32" />
    <link rel="icon" type="image/png" href="./images/favicon-16x16.png" sizes="16x16" />
    <title>
        <?php
        if (isset($pageTitle)) {
            echo $pageTitle;
        } else {
            echo "NONE";
        }
        ?>
    </title>
    <link href="/./css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-_G1_GY8kUq50KJ_ZBeUYlt9vOFF0RS8&callback=initMap" async defer></script>



    <!-- Custom Theme files -->

    <link href="/./css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/./css/screen.css" rel="stylesheet" type="text/css" media="all">
    <link href="/./css/nav.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="./css/map.css" rel="stylesheet" type="text/css" media="all"/>

    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Squada+One' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <meta content="en" http-equiv="content-language">


    <script type="text/javascript" src="/js/move-top.js"></script>
    <script type="text/javascript" src="/js/easing.js"></script>

    <script type="text/javascript" src="/js/googleMap.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- //end-smoth-scrolling -->
</head>
<body>

<div class="banner-two">
    <div class="header">
        <div class="container">
            <div class="header-main">
                <div class="logo">
                    <h1><a href="/./index.php"><img src="/./images/logo3.png" width="350" height="100"></a></h1>
                </div>
                <div class="top-nav">
                    <span class="menu"> <img src="../images/icon.png" alt=""/></span>
                    <nav class="nav">
                        <ul class="res">
                            <li><a href="/./index.php">Home</a></li>
                            <li><a href="/./about.php">About</a></li>
                            <!--
                            <li><a href="./blog.php#blog">Blog</a></li>
                            --->
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




