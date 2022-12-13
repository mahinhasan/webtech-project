function validate() {

    if (document.myForm.name.value == "") {
      alert("Please provide your name!");
      document.myForm.passeord.focus();
      return false;
    }
    if (document.myForm.password.value == "") {
      alert("Please provide your password!");
      document.myForm.password.focus();
      return false;
    }
  
    if (document.myForm.usertype.value == "-1") {
      alert("Please provide your usertype!");
      return false;
    }
    return (true);
  }