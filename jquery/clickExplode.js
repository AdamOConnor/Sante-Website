/**
 * Created by Adam O'Connor on 12/10/2015.
 */
$(function() {
    // run the currently selected effect
    function runEffect01() {

        // run the effect
        var options = {};
        $( "#effect01" ).show( 'explode', options);
    }
    function runEffect02() {

        // run the effect
        var options = {};
        $( "#effect02" ).show( 'explode', options);
    }
    //callback function to bring a hidden box back
    function callback() {
        setTimeout(function() {
            $( "#effect1:visible").removeAttr( "style" ).fadeOut();
        }, 10000 );
    }

    function runEffect03() {

        // run the effect
        var options = {};
        $("#effect03").show('explode', options);
    }
    function runEffect04() {

        // run the effect
        var options = {};
        $( "#effect04" ).show( 'explode', options);
    }

    // set effect from select menu value
    $( "#hover1" ).click(function() {
        $( "#effect02" ).hide();
        $( "#effect03" ).hide();
        $( "#effect04" ).hide();
        runEffect01();
    });
    $( "#hover2" ).click(function() {
        $( "#effect01" ).hide();
        $( "#effect03" ).hide();
        $( "#effect04" ).hide();
        runEffect02();
    });
    $( "#hover3" ).click(function() {
        $( "#effect01" ).hide();
        $( "#effect02" ).hide();
        $( "#effect04" ).hide();
        runEffect03();
    });
    $( "#hover4" ).click(function() {
        $( "#effect01" ).hide();
        $( "#effect02" ).hide();
        $( "#effect03" ).hide();
        runEffect04();
    });
    $( "#effect01" ).hide();
    $( "#effect02" ).hide();
    $( "#effect03" ).hide();
    $( "#effect04" ).hide();

});

$("document").ready(function() {
    $(".beginners").css("background-color","gray");
});