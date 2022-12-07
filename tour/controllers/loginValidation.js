// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form
function loginvalidateForm() {
    // Retrieving the values of form elements

    var username = document.myform.username.value;
    var password = document.myform.password.value;

    // Defining error variables with a default value
    var usernameerror = passworderror = true;

    // Validate username
    if (username == "") {
        printError("usernameerror", " USERNAME ");
    } else {
        printError("usernameerror", "");
        usernameerror = false;
    }

    // Validate password
    if (password == "") {
        printError("passworderror", "PASSWORD ");
    } else {
        printError("passworderror", "");
        passworderror = false;
    }

    // Prevent the form from being submitted if there are any errors
    if ((usernameerror || passworderror) == true) {
        return false;
    } else {
        return true;
    }
}
