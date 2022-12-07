// Defining a function to display error message
function printError(elemId, hintMsg) {
  document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form
function form() {
  // Retrieving the values of form elements

  var username = document.signupform.username.value;
  var email = document.signupform.email.value;
  var password = document.signupform.password.value;
  var password2 = document.signupform.password.value;

  // Defining error variables with a default value
  var usernameerror = emailerror = passworderror = password2error = true;

  // Validate username
  if (username == "") {
      printError("usernameerror", "Enter your Username");
  } else {
      printError("usernameerror", "");
      usernameerror = false;
  }

  // Validate email
  if (email == "") {
      printError("emailerror", "Enter your Email");
  } else {
      printError("emailerror", "");
      emailerror = false;
  }

  // Validate userpassword
  if (password == "") {
      printError("passworderror", "Enter your Password");
  } else {
      printError("passworderror", "");
      passworderror = false;
  }

  // Validate confirmpassword
  if (password2 == "") {
      printError("password2error", "Confirm Your Password");
  } else {
      printError("passwor2derror", "");
      password2error = false;
  }

  // Prevent the form from being submitted if there are any errors
  if (
      (usernameerror ||
          emailerror ||
          passworderror ||
          passwor2derror) == true
  ) {
      return false;
  } else {
      return true;
  }
}
