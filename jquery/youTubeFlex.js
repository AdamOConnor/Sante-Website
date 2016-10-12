/**
 * Created by Adam O'Connor on 01/10/2016.
 */

function responseveIframe() {
    $('iframe').height(
        $('iframe').attr("height") / $('iframe').attr("width") * $('iframe').width()
    );
}

responseveIframe();

$(window).resize(function() {
    responseveIframe();
});