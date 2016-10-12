<?php
	$pageTitle = "Bmi Calculator"; // set page title
	include_once('include/header.php');
?>
<script type="text/javascript" src="jquery/jquery.1.6.1.min.js"></script>
<script type="text/javascript" src="jquery/jquery-ui-1.8.16.custom.min.js"></script>
<link href="/./css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" media="all"/>
<script src="./jquery-ui-1.11.4.custom/jquery-ui.min.css"></script>
<!--about start here-->
<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="about-top">
                <h2>BMI Calculator</h2>
            </div>
            <div class="about-bottom">
                <div class="col-md-6 ab-left">

                    <div id="containerBmi">
                        <div id="bmiContainer">
                                <div id="lengthSlider"></div>
                            <label for="length">Your Height is <input type="text" id="length" /> centimeters</label>

                            <div id="weightSlider"></div>
                            <label for="weight">Your weight is <input type="text" id="weight" /> kilograms</label>

                            <div id="bmiScale">
                                Your Body Mass Index is
                                <div id="bmiScalePointer"></div>
                            </div>

                            <div id="bmiInformation">
                                <h4>What is a healthy BMI?</h4>
                                <table border="0" cellpadding="0" cellspacing="0" width="500">
                                    <tbody>
                                    <tr>
                                        <td width="10"><img src="images/bmi-yellow.gif" alt="normal" height="10" width="10"></td>
                                        <td width="130">Between 16 - 20</td>
                                        <td width="240">your BMI is a little to low</td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/bmi-green.gif" alt="healthy" height="10" width="10"></td>
                                        <td>Between 20 - 25</td>
                                        <td>Healthy Weight</td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/bmi-yellow.gif" alt="overweight" height="10" width="10"></td>
                                        <td>Between 25 - 27</td>
                                        <td>Normal - Slightly overweight</td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/bmi-orange.gif" alt="little overweight" height="10" width="10"></td>
                                        <td>Between 27 - 29</td>
                                        <td>Normal - Overweight</td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/bmi-red-orange.gif" alt="overweight" height="10" width="10"></td>
                                        <td>Above 30</td>
                                        <td>Overweight</td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/bmi-red.gif" alt="severly overweight" height="10" width="10"></td>
                                        <td>Over 40</td>
                                        <td>Severely Overweight</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!--about end here-->
<?php
include_once('include/footer.php');
?>
<!--footer end here-->