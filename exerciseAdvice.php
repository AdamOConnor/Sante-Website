<?php
/**
 * Created by PhpStorm.
 * User: Adam O'Connor
 * Date: 25/07/2016
 * Time: 20:35
 */

$pageTitle = "Exercise Advice"; // set page title
include_once('include/header.php');
?>
    <script type="text/javascript" src="jquery/jquery.1.6.1.min.js"></script>
    <script type="text/javascript" src="jquery/youTubeFlex.js"></script>
    <script src="js/content.js" type="text/javascript"></script>
    <!--content-->
    <div class="container">
        <div class="contact">
            <div class="contact-md">
                <h3>Exercise Video </h3>
                <p class="justify">
                    Have a look at the video below for a mini workout. Do not attempt these exercises if you are injured or pregnant.
                    You should also be experienced in the principles of Pilate's. Sante Fitness is not responsible for any home injuries.
                </p>
                <iframe class="video" width="650" height="400"
                        src="http://www.youtube.com/embed/lCg_gh_fppI?autoplay=0">
                </iframe>
            </div>

        </div>
    </div>

                <!---- css for exerciseContent is in the style css sheet ---->

                <hr>
    <div class="container">
        <div class="contact">
            <div class="contact-md">
                <h3>Quick Tips</h3>
                <p class="justify">
                        1. Always warm up before you attempt any of the exercises to prevent injury.<br>
                        2. Pull in your stomach muscles gently to support your back.( Visualise an icecube on your bellybutton pulling in towards your spine).<br>
                        3. Breathe out on the effort e.g. on the abdominal curl, breathe out as you come up and breathe in as you go down.<br>
                        4. Watch your neck alignment. Visualise a peach under your chin.<br>
                        5. Imprint your back if both legs are in tabletop or extended in the air.<br>
                        6. Always stretch after you exercise to bring the muscles back to their original length.<br>
                        7. It only takes a few minutes and prevents the muscles from staying tight after the exercise,
                            which could cause possible injury or bad posture.<br>
                        8. If you feel pain at any stage - STOP!<br>
                </p>
            </div>
                <hr>
        </div>
    </div>
    <div class="clearfix"> </div>
<?php
include_once('include/footer.php');
?>