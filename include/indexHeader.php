<?php
/**
 * Created by PhpStorm.
 * User: Adam O'Connor
 * Date: 23/11/2015
 * Time: 20:37
 */
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../images/favicon.ico" sizes="32x32" />
    <link rel="icon" type="image/png" href="../images/favicon-16x16.png" sizes="16x16" />
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

   
    <script src="/./js/jquery-1.11.0.min.js"></script>
  
    <!-- Custom Theme files -->
    <link href="/./css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="/./css/nav.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <link rel="stylesheet" href="/./css/flexslider.css" type="text/css" media="screen" />
    <script type="text/javascript" src="/js/reloadFile.js"></script>
</head>
<body>
<!--banner start here-->
<div class="banner">
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
                            <li>
                                <a href="/./services.php">Services</a>
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
                            <li><a href="/./classes.php">Timetable</a></li>
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
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="banner-bottom">
                            <h2>Choose Us</h2>
                            <p>Let us be your fitness professionals.</p>
                            <a href="/exerciseAdvice.php">Read More</a>
                        </div>
                    </li>
                    <li
                        <div class="banner-bottom">
                            <h2>Your Health</h2>
                            <p>your health is our priority.</p>
                            <a href="/gallery.php">Read More</a>
                        </div>
                    </li>
                    <li>
                        <div class="banner-bottom">
                            <h2>Lifestyle</h2>
                            <p>Its always important to take care of yourself.</p>
                            <a href="/lifeStyle.php">Read More</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </section>
    </div>
</div>
<!--banner end here-->
<!-- FlexSlider -->
<script defer src="./js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(function(){

    });
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- FlexSlider -->
