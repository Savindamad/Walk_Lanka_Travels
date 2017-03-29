var allPlaces = [];
$.ajax({
    url: 'TourGuideController/getMapPlaces',
    type: 'POST',
    data: {
    },
    dataType: 'json',
    cache: false,
    success: function (locations) {
        allPlaces = locations;
    }
});

function loadMap() {
    var locations = [];
    var numPlaces = document.getElementById('numPlaces').value;
    for (var i = 1; i <= numPlaces; i++) {
        var placesId = document.getElementById('p_' + i).value;
        for (var j = 0; j < allPlaces.length; j++) {
            if(placesId==allPlaces[j][3]){
                locations[i-1] = allPlaces[j];
            }
        }
    }

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 8,
        center: new google.maps.LatLng(7.8731, 80.7718),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
}