<?php
$pageTitle = "Gallery"; // set page title
include_once('include/header.php');
?>

     <style>
         @import "css/insta.css";
     </style>

<!--banner end here-->
<!--services start here-->
<div class="services">
    <div class="container">
        <div class="services-main">
            <div class="services-top">
                <h2>Instagram</h2>
                <p>Here are the images from </p>
            </div>
            <div id="instafeed" class="view view-seventh"></div>
                <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
                <script src='http://f.cl.ly/items/3o2z3b1R3G250G1t0w2L/instafeed.min.js'></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		        <script src="https://jsonp.afeld.me/?url=http%3A%2F%2Finstafeedjs.com%2Fjs%2Finstafeed.min.js"></script>
                <script src="js/index.js"></script>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<?php
include_once('include/footer.php');
?>