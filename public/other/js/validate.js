$(document).ready(function () {
    var today = new Date();
    var maxday = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();
    if (dd < 10) {
        dd = '0' + dd
    }
    if (mm < 10) {
        mm = '0' + mm
    }

    today = yyyy + '-' + mm + '-' + dd;
    var maxYear = yyyy + 2;
    maxday = maxYear + '-' + mm + '-' + dd;
    document.getElementById("arrivalDate").setAttribute("min", today);
    document.getElementById("arrivalDate").value = today;
    document.getElementById("arrivalDate").setAttribute("max", maxday);
});

function email() {
    var x = document.getElementById("email").value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        document.getElementById("email").style.border = "red";
        return false;
    } else {
        document.getElementById("email").style.border = "";
        return true;
    }
}

function mobile() {
    var x = document.getElementById("mobile").value;
    if (x.length > 10 && x.length < 12) {
        return true;
    } else {
        return false;
    }
}

function numPersons() {
    var x = document.getElementById("numPersons").value;
    if (x < 1) {
        return false;
    } else if (x > 30) {
        return false;
    } else {
        return true;
    }
}

function single() {
    var x = document.getElementById("single").value;
    if (x < 0) {
        return false;
    } else if (x > 20) {
        return false;
    } else {
        return true;
    }
}

function double() {
    var x = document.getElementById("double").value;
    if (x < 0) {
        return false;
    } else if (x > 10) {
        return false;
    } else {
        return true;
    }
}

function trible() {
    var x = document.getElementById("trible").value;
    if (x < 0) {
        return false;
    } else if (x > 10) {
        return false;
    } else {
        return true;
    }
}

function email_change() {
    var x = document.getElementById("email").value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        document.getElementById("email").style.border = "red";
    } else {
        document.getElementById("email").style.border = "";
    }
}


function numPersons_change() {
    var x = document.getElementById("numPersons").value;
    if (x < 1) {
        document.getElementById("numPersons").value = 1;
    } else if (x > 20) {
        document.getElementById("numPersons").value = 20;
    }
}

function single_change() {
    var x = document.getElementById("single").value;
    if (x < 0) {
        document.getElementById("single").value = 0;
    } else if (x > 20) {
        document.getElementById("single").value = 20;
    }
}

function double_change() {
    var x = document.getElementById("double").value;
    if (x < 0) {
        document.getElementById("double").value = 0;
    } else if (x > 10) {
        document.getElementById("double").value = 10;
    }
}

function trible_change() {
    var x = document.getElementById("trible").value;
    if (x < 0) {
        document.getElementById("trible").value = 0;
    } else if (x > 10) {
        document.getElementById("trible").value = 10;
    }
}







