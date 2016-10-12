/**
 * Created by Adam O'Connor on 06/10/2015.
 */
$(document).ready(function(){
    $(".home").hover(function() {
        $(this).addClass("#test2");

    }, function() {
        $(this).removeClass("#test2");
    });
});