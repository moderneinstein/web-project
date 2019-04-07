function validateForm() {
    var isNum = false,
        isCap = false;
    var x = document.forms["myForm"]["email"].value;
    var pass = document.forms["myForm"]["password"].value;
    if (x.length <= 6) {
        alert("Enter a proper email");
        var emailVal = false;
    }
    for (var i = 0; i < pass.length; i++) {
        if (pass.charAt(i) <= 9 && pass.charAt(i >= 0))
            isNum = true;
        if (pass.charAt(i) <= 'Z' && pass.charAt(i >= 'A'))
            isCap = true;
    }

    if (isNum === false || isCap === false || pass.length < 8) {
        alert("Enter a proper password");
        var passVal = false;
    }

    if (emailVal === true && passVal === true)
        return true;
    else return false;
}

function validateForm2() {
    var isNum = false,
        isCap = false,
        isName=false;
    var x = document.forms["myForm"]["email"].value;
    var name = document.forms["myForm"]["name"].value;
    var pass = document.forms["myForm"]["password"].value;
    if (x.length <= 6) {
        alert("Enter a proper email");
        var emailVal = false;
    }
    if (name.length <= 6) {
        alert("Enter a proper name");
        var isName = false;
    }
    for (var i = 0; i < pass.length; i++) {
        if (pass.charAt(i) <= 9 && pass.charAt(i >= 0))
            isNum = true;
        if (pass.charAt(i) <= 'Z' && pass.charAt(i >= 'A'))
            isCap = true;
    }

    if (isNum === false || isCap === false || pass.length < 8) {
        alert("Enter a proper password");
        var passVal = false;
    }

    if (emailVal === true && passVal === true && isName=== true)
        return true;
    else return false;
}