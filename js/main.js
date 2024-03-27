//Fit Texts
window.fitText(document.getElementById("number"), 0.13);

//Adjust height of test container when it's smaller than it's width
window.onresize = function(){
    var winheight = window.innerHeight;
    document.getElementById("position").style.width = winheight + "px";
    
}

//Popup Windows
function popupWindow(target){
    document.getElementById(target).classList.replace("popup-hidden", "popup-visible")
}

function popupHide(target){
    document.getElementById(target).classList.replace("popup-visible", "popup-hidden")
}


//Password Functionality
var safety = 0;

function confirmPW() {
    var pw = document.forms["registerform"]["password"].value;
    var pwc = document.forms["registerform"]["passwordcheck"].value;

    if (pw != pwc) {
        document.getElementById("submitbutton").disabled = true;
    } else {
        if ( pw && safety > 3){
            document.getElementById("submitbutton").disabled = false;
        }
    }
}

function passwordSafety() {
    var safety_length = 0;
    var safety_letter = 0;
    var safety_caps = 0;
    var safety_number = 0;
    var safety_symbol = 0;

    var checker_letter = /[a-z]/g;
    var checker_caps = /[A-Z]/g;
    var checker_number = /[0-9]/g;
    var checker_symbol = /[!@#$%^&*]/g;

    var pw = document.forms["registerform"]["password"].value;

    document.getElementById("pwc").style.backgroundColor = "#ffffff";


    //Check for password length
    if (pw.length > 7) {
        safety_length = 3;
    } else {
        safety_length = 0;
    }

    //Check if password contains any text
    if (pw.match(checker_letter)) {
        safety_letter = 1;
    } else {
        safety_letter = 0;
    }

    //Check if password contains caps
    if (pw.match(checker_caps)) {
        safety_caps = 1;
    } else {
        safety_caps = 0;
    }

    //Check if password contains numbers
    if (pw.match(checker_number)) {
        safety_number = 1;
    } else {
        safety_number = 0;
    }

    //Check if password contains a special symbol
    if (pw.match(checker_symbol)) {
        safety_symbol = 1;
    } else {
        safety_symbol = 0;
    }

    safety = safety_length + safety_letter + safety_caps + safety_number + safety_symbol;

    //Setup color coding
    var red = document.getElementById("red");
    var orange = document.getElementById("orange");
    var green = document.getElementById("green");

    switch (safety) {
        case 0:
            red.style.backgroundColor = "#acacac";
            orange.style.backgroundColor = "#acacac";
            green.style.backgroundColor = "#acacac";
            break;
        case 1:
            red.style.backgroundColor = "#ff0000";
            orange.style.backgroundColor = "#acacac";
            green.style.backgroundColor = "#acacac";
            break;
        case 2:
            red.style.backgroundColor = "#ff0000";
            orange.style.backgroundColor = "#acacac";
            green.style.backgroundColor = "#acacac";
            break;
        case 3:
            red.style.backgroundColor = "#ff0000";
            orange.style.backgroundColor = "#acacac";
            green.style.backgroundColor = "#acacac";
            break;
        case 4:
            red.style.backgroundColor = "#ffff00";
            orange.style.backgroundColor = "#ffff00";
            green.style.backgroundColor = "#acacac";
            break;
        case 5:
            red.style.backgroundColor = "#ffff00";
            orange.style.backgroundColor = "#ffff00";
            green.style.backgroundColor = "#acacac";
            break;
        case 6:
            red.style.backgroundColor = "#ffff00";
            orange.style.backgroundColor = "#ffff00";
            green.style.backgroundColor = "#acacac";
            break;
        case 7:
            red.style.backgroundColor = "#00ff00";
            orange.style.backgroundColor = "#00ff00";
            green.style.backgroundColor = "#00ff00";
            break;
    }
}