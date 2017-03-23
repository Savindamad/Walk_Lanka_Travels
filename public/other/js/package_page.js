function getHotelsPackage(packageId, star) {
    $.ajax({
        url: '../PackageController/getHotelInfo',
        type: 'POST',
        data: {
            packageId: packageId,
            star: star
        },
        dataType: 'json',
        cache: false,
        success: function (result) {
            for (i = 0; i < result.length; i++) {
                var hId = result[i].h_id;
                var rId = result[i].r_id;
                var sId = result[i].s_id;
                var hotels = result[i].hotels;
                var rooms = result[i].rooms;

                $('#' + hId).html(hotels);
                $('#' + rId).html(rooms);
                document.getElementById(sId).value = star;
            }
        }
    });
}

function getHotelsPlace(id, i, placeId, star) {
    $.ajax({
        url: '../PackageController/getHotelPlaceInfo',
        type: 'POST',
        data: {
            placeId: placeId,
            star: star
        },
        dataType: 'json',
        cache: false,
        success: function (result) {
            var hotels = result[0].hotels;
            var rooms = result[0].rooms;
            $('#h_' + id + '_' + i).html(hotels);
            $('#r_' + id + '_' + i).html(rooms);
        }
    });
}

function submitFunc(packageId, numPlaces) {
    if (validateForm()) {
        var email = document.getElementById("email").value;
        var country = document.getElementById("country").value;
        var mobile = document.getElementById("mobile").value;
        var numPersons = document.getElementById("numPersons").value;
        var singleRooms = document.getElementById("single").value;
        var doubleRooms = document.getElementById("double").value;
        var tribleRomms = document.getElementById("trible").value;
        var arrivalDate = document.getElementById("arrivalDate").value;

        var hotelInfo = [];
        var placesInfo = [];
        var roomCodition = [];

        $.ajax({
            url: '../PackageController/getAllPlacesId',
            type: 'POST',
            data: {
                packageId: packageId,
            },
            dataType: 'json',
            cache: false,
            success: function (result) {
                for (var i = 0; i < result.length; i++) {
                    var x = i + 1;
                    var placeId = result[i];
                    placesInfo[i] = placeId;
                    hotelInfo[i] = document.getElementById("h_" + placeId + "_" + x).value;
                    roomCodition[i] = document.getElementById("r_" + placeId + "_" + x).value;
                }
                var response = '<div class="container-fluid" style="margin-top: 130px; margin-bottom: 140px;"><div class="row"><div class="col-md-1"></div><div class="col-md-10"><div class="alert alert-success alert-dismissable"><h4>Response successfully submitted</h4><p>Your response had been submitted. Our agent will contact you through email with further details. We will come up with the best travel reservation plan for you, considering all youur preferences, at the best rate. Thank you for choosing Walk Lanka Travels as your tour partner. We are looking forward to provide you with comfortable transporation with tour guidance.<br> Have a nice day!</p><a href="../index.php/Packages" class="btn btn-success" style="margin-top:20px">View packages</a></div></div><div class="col-md-1"></div></div></div>';
                $('#content').html(response);
                $.ajax({
                    url: '../PackageController/setPackageData',
                    type: 'POST',
                    data: {
                        packageId: packageId,
                        email: email,
                        country: country,
                        mobile: mobile,
                        numPersons: numPersons,
                        singleRooms: singleRooms,
                        doubleRooms: doubleRooms,
                        tribleRomms: tribleRomms,
                        hotelInfo: hotelInfo,
                        placesInfo: placesInfo,
                        roomCodition: roomCodition,
                        arrivalDate: arrivalDate
                    },
                    success: function (result) {

                    }
                });
            }
        });

    }
}

function validateForm() {
    if (!(email())) {
        alert("Email");
        return false;
    } else if (!(mobile())) {
        alert("Mobile");
        return false;
    } else if (!(numPersons())) {
        return false;
    } else if (!(single())) {
        return false;
    } else if (!(double())) {
        return false;
    } else if (!(trible())) {
        return false;
    } else {
        return true;
    }

}


