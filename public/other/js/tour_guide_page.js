loadMap();
function changeNumPlaces(numPlaces) {
    var numPlacesprv = parseInt(document.getElementById("numPlaces1").value);

    if (numPlaces > numPlacesprv) {

        $.ajax({
            url: 'TourGuideController/getPlaces',
            type: 'POST',
            data: {
                placeNum: numPlacesprv,
                placeNumNw: numPlaces
            },
            success: function (responseText) {
                document.getElementById("numPlaces1").value = numPlaces;
                $('#places').append($(responseText).hide().fadeIn(500));
                loadMap();
            }
        });
    } else {
        for (var i = numPlacesprv; i > numPlaces; i--) {
            $('#d_' + i).fadeOut(500);
        }
        document.getElementById("numPlaces1").value = numPlaces;
    }
}

function submitFunc() {
    if (validateForm()) {
        var email = document.getElementById("email").value;
        var country = document.getElementById("country").value;
        var mobile = document.getElementById("mobile").value;
        var numPersons = parseInt(document.getElementById("numPersons").value);
        var numDays = parseInt(document.getElementById("numDays").value);
        var numPlaces = parseInt(document.getElementById("numPlaces").value);
        var message = document.getElementById("message").value;

        var places = [];
        if (document.getElementById('optionalFormStatus').checked) {
            for (var i = 1; i <= numPlaces; i++) {
                var placeId = document.getElementById("p_" + i).value;
                places[i - 1] = placeId;
            }

            $.ajax({
                url: 'TourGuideController/setTourGuideData',
                type: 'POST',
                data: {
                    status: '0',
                    email: email,
                    country: country,
                    mobile: mobile,
                    numPersons: numPersons,
                    numDays: numDays,
                    numPlaces: numPlaces,
                    message: message,
                    places: places
                },
                dataType: 'json',
                cache: false,
                success: function (result) {

                }
            });

            var response = '<div class="container-fluid" style="margin-top: 130px; margin-bottom: 140px;"><div class="row"><div class="col-md-1"></div><div class="col-md-10"><div class="alert alert-success alert-dismissable"><h4>Response successfully submitted</h4><p>Your response had been submitted. Our agent will contact you through email with further details. We will come up with the best travel reservation plan for you, considering all youur preferences, at the best rate. Thank you for choosing Walk Lanka Travels as your tour partner. We are looking forward to provide you with comfortable transporation with tour guidance.<br> Have a nice day!</p><a href="../index.php/TourGuide" class="btn btn-success" style="margin-top:20px">Submit another response</a></div></div><div class="col-md-1"></div></div></div>';
            $('#content').html(response);

        } else {
            $.ajax({
                url: 'TourGuideController/setTourGuideData',
                type: 'POST',
                data: {
                    status: '1',
                    email: email,
                    country: country,
                    mobile: mobile,
                    numPersons: numPersons,
                    numDays: numDays,
                    numPlaces: numPlaces,
                    message: message
                },
                dataType: 'json',
                cache: false,
                success: function (result) {
                }
            });

            var response = '<div class="container-fluid" style="margin-top: 130px; margin-bottom: 140px;"><div class="row"><div class="col-md-1"></div><div class="col-md-10"><div class="alert alert-success alert-dismissable"><h4>Response successfully submitted</h4><p>Your response had been submitted. Our agent will contact you through email with further details. We will come up with the best travel reservation plan for you, considering all youur preferences, at the best rate. Thank you for choosing Walk Lanka Travels as your tour partner. We are looking forward to provide you with comfortable transporation with tour guidance.<br> Have a nice day!</p><a href="../index.php/TourGuide" class="btn btn-success" style="margin-top:20px">Submit another response</a></div></div><div class="col-md-1"></div></div></div>';
            $('#content').html(response);
        }
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
    } else if (!(numDays())) {
        return false;
    } else {
        return true;
    }
}