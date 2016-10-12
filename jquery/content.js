
/**
 * Created by Adam O'Connor on 14/10/2015.
 */
$(document).ready(function() {
    $('#button1').click(function() {
        $.getJSON('content.jsn');
        return false;
    });
});

$(document).ready(function() {
    $('#button1').click(function() {
        $.getJSON('./json/content.jsn', function(data) {
            $('#content').empty();
            $.each(data, function(entryIndex, entry) {
                var html = '<div class="entry">';
                html += '<h3 class="ui-widget-header ui-corner-all"">' + entry['name'] + '</h3>';
                html += '<div class="image"><img height="250" width="250" src="' + entry['year'] + '"></div>';
                if (entry['info']) {
                    html += '<div class="line">';
                    $.each(entry['info'], function (lineIndex, line) {
                        html += '<div class="quote-line">' + line + '</div>';
                    });
                }
                $('#content').append(html);

            });
        });
        return false;
    });
});


$(document).ready(function() {
    $('#button2').click(function() {
        $.getJSON('content.jsn');
        return false;
    });
});

$(document).ready(function() {
    $('#button2').click(function() {
        $.getJSON('./json/pilates-tums.jsn', function(data) {
            $('#content').empty();
            $.each(data, function(entryIndex, entry) {
                var html = '<div class="entry">';
                html += '<h3 class="ui-widget-header ui-corner-all"">' + entry['name'] + '</h3>';
                html += '<div class="image"><img height="250" width="250" src="' + entry['year'] + '"></div>';
                if (entry['info']) {
                    html += '<div class="line">';
                    $.each(entry['info'], function (lineIndex, line) {
                        html += '<div class="quote-line">' + line + '</div>';
                    });
                }
                $('#content').append(html);

            });
        });
        return false;
    });
});


$(document).ready(function() {
    $('#button3').click(function() {
        $.getJSON('content.jsn');
        return false;
    });
});

$(document).ready(function() {
    $('#button3').click(function() {
        $.getJSON('./json/total-barre.jsn', function(data) {
            $('#content').empty();
            $.each(data, function(entryIndex, entry) {
                var html = '<div class="entry">';
                html += '<h3 class="ui-widget-header ui-corner-all"">' + entry['name'] + '</h3>';
                html += '<div class="image"><img height="250" width="250" src="' + entry['year'] + '"></div>';
                if (entry['info']) {
                    html += '<div class="line">';
                    $.each(entry['info'], function (lineIndex, line) {
                        html += '<div class="quote-line">' + line + '</div>';
                    });
                }
                $('#content').append(html);

            });
        });
        return false;
    });
});

$(document).ready(function() {
    $('#button4').click(function() {
        $.getJSON('content.jsn');
        return false;
    });
});

$(document).ready(function() {
    $('#button4').click(function() {
        $.getJSON('./json/cardio.jsn', function(data) {
            $('#content').empty();
            $.each(data, function(entryIndex, entry) {
                var html = '<div class="entry">';
                html += '<h3 class="ui-widget-header ui-corner-all"">' + entry['name'] + '</h3>';
                html += '<div class="image"><img height="250" width="250" src="' + entry['year'] + '"></div>';
                if (entry['info']) {
                    html += '<div class="line">';
                    $.each(entry['info'], function (lineIndex, line) {
                        html += '<div class="quote-line">' + line + '</div>';
                    });
                }
                $('#content').append(html);

            });
        });
        return false;
    });
});

$(document).ready(function() {
    $('#button5').click(function() {
        $.getJSON('content.jsn');
        return false;
    });
});

$(document).ready(function() {
    $('#button5').click(function() {
        $.getJSON('./json/message.jsn', function(data) {
            $('#content').empty();
            $.each(data, function(entryIndex, entry) {
                var html = '<div class="entry">';
                html += '<h3 class="ui-widget-header ui-corner-all"">' + entry['name'] + '</h3>';
                html += '<div class="image"><img height="250" width="250" src="' + entry['year'] + '"></div>';
                if (entry['info']) {
                    html += '<div class="line">';
                    $.each(entry['info'], function (lineIndex, line) {
                        html += '<div class="quote-line">' + line + '</div>';
                    });
                }
                $('#content').append(html);

            });
        });
        return false;
    });
});


$(document).ready(function() {
    $('#button6').click(function() {
        $.getJSON('content.jsn');
        return false;
    });
});

$(document).ready(function() {
    $('#button6').click(function() {
        $.getJSON('./json/personal-training.jsn', function(data) {
            $('#content').empty();
            $.each(data, function(entryIndex, entry) {
                var html = '<div class="entry">';
                html += '<h3 class="ui-widget-header ui-corner-all"">' + entry['name'] + '</h3>';
                html += '<div class="image"><img height="250" width="250" src="' + entry['year'] + '"></div>';
                if (entry['info']) {
                    html += '<div class="line">';
                    $.each(entry['info'], function (lineIndex, line) {
                        html += '<div class="quote-line">' + line + '</div>';
                    });
                }
                $('#content').append(html);

            });
        });
        return false;
    });
});


$(document).ready(function() {
    $('#button7').click(function() {
        $.getJSON('content.jsn');
        return false;
    });
});

$(document).ready(function() {
    $('#button7').click(function() {
        $.getJSON('./json/cardiac.jsn', function(data) {
            $('#content').empty();
            $.each(data, function(entryIndex, entry) {
                var html = '<div class="entry">';
                html += '<h3 class="ui-widget-header ui-corner-all"">' + entry['name'] + '</h3>';
                html += '<div class="image"><img height="250" width="250" src="' + entry['year'] + '"></div>';
                if (entry['info']) {
                    html += '<div class="line">';
                    $.each(entry['info'], function (lineIndex, line) {
                        html += '<div class="quote-line">' + line + '</div>';
                    });
                }
                $('#content').append(html);

            });
        });
        return false;
    });
});

$(document).ready(function() {
    $('#button8').click(function() {
        $.getJSON('content.jsn');
        return false;
    });
});

$(document).ready(function() {
    $('#button8').click(function() {
        $.getJSON('./json/private-fitness.jsn', function(data) {
            $('#content').empty();
            $.each(data, function(entryIndex, entry) {
                var html = '<div class="entry">';
                html += '<h3 class="ui-widget-header ui-corner-all"">' + entry['name'] + '</h3>';
                html += '<div class="image"><img height="250" width="250" src="' + entry['year'] + '"></div>';
                if (entry['info']) {
                    html += '<div class="line">';
                    $.each(entry['info'], function (lineIndex, line) {
                        html += '<div class="quote-line">' + line + '</div>';
                    });
                }
                $('#content').append(html);

            });
        });
        return false;
    });
});
