$(document).on("pageinit", "#map_page", function() {
    initialize();
});

$(document).on('click', '#submit', function(e) {
    e.preventDefault();
    calculateRoute();
});

var directionDisplay,
    directionsService = new google.maps.DirectionsService(),
    map;

function initialize()
{
    directionsDisplay = new google.maps.DirectionsRenderer();
    var mapCenter = new google.maps.LatLng(53.350217, -6.440024);

    var myOptions = {
        zoom:17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: mapCenter
    }

    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById("directions"));

    var contentString = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">Sante Fitness</h1>'+
        '<div id="bodyContent">'+
        '<img src="./images/pilates6.jpg" height="200" width="210"/>'+
        '<p>'+
        '1A Esker Glebe, Lucan, Co.Dublin'+
        '</p>'+
        '<p>Sante Fitness, <a href="home.html">Visit our Website</a>'+
        '</div>'+
        '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    var marker = new google.maps.Marker({
        position: {lat: 53.350310, lng: -6.440207},
        map: map,
        title: 'Sante Fitness'
    });
    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });

}

function calculateRoute()
{
    var selectedMode = $("#mode").val(),
        start = $("#from").val(),
        end = {lat: 53.350217, lng: -6.440024}

    if(start == '' || end == '')
    {
        // cannot calculate route
        $("#results").hide();
        return;
    }
    else
    {
        var request = {
            origin:start,
            destination:end,
            travelMode: google.maps.DirectionsTravelMode[selectedMode]
        };

        directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
                $("#results").show();
                /*
                 var myRoute = response.routes[0].legs[0];
                 for (var i = 0; i < myRoute.steps.length; i++) {
                 alert(myRoute.steps[i].instructions);
                 }
                 */
            }
            else {
                $("#results").hide();
            }
        });

    }
}