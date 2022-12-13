function validate() {

    if (document.myForm.name.value == "") {
      alert("Please provide your name!");
      document.myForm.passeord.focus();
      return false;
    }
    if (document.myForm.passeord.value == "") {
      alert("Please provide your Email!");
      document.myForm.passeord.focus();
      return false;
    }
  
    if (document.myForm.usertype.value == "-1") {
      alert("Please provide your country!");
      return false;
    }
    return (true);
  }