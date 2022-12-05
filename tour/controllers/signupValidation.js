// const form = document.getElementById('form');
// const username = document.getElementById('username');
// const email = document.getElementById('email');
// const password = document.getElementById('password');
// const password2 = document.getElementById('password2');

// form.addEventListener('submit', (e) =>{
//     let messages = []
//     if (username.value === '' || username.value == null){
//         messages.push('username must be required')
//     }
//     if (emailValue === '') {
//         messages.push('Email is required');
//     } else if (!isValidEmail(emailValue)) {
//         messages.push('Provide a valid email address');
//     }else {
//         setSuccess(password2);
//     }
//     if (password.value.length <= 8){
//         messages.push('password must be longer than 8 charecters')
//     }

//     if (password.value.length >=10){
//         messages.push('password must be less than 10 charecters')
//     }
//     if (password.value === 'password'){
//         messages.push('password can not be password')
//     }
//     if (password2.Value === '') {
//         messages.push('Please confirm your password');
//     } else if (password2.Value !== password.Value) {
//         messages.push("Passwords doesn't match");
//     } else {
//         setSuccess(password2);
//     }
//     if(messages.length > 0){
//         e.preventDefault()
//         errorElement.innerText = messages.join(', ')
//     }


// })

function validation(){

  // var user = document.getElementById('user').value;
  // var pass = document.getElementById('pass').value;
  // var confirmpass = document.getElementById('conpass').value;
  // var mobileNumber = document.getElementById('mobileNumber').value;
  // var emails = document.getElementById('emails').value;

  const form = document.getElementById('form').value;
const username = document.getElementById('username').value;
const email = document.getElementById('email').value;
const password = document.getElementById('password').value;
const password2 = document.getElementById('password2').value;




  if(username == ""){
    document.getElementById('username').innerHTML =" ** Please fill the username field";
    return false;
  }
  if((username.length <= 2) || (username.length > 20)) {
    document.getElementById('username').innerHTML =" ** Username lenght must be between 2 and 20";
    return false;	
  }
  if(!isNaN(username)){
    document.getElementById('username').innerHTML =" ** only characters are allowed";
    return false;
  }





  if(email == ""){
    document.getElementById('email').innerHTML =" ** Please fill the email idx` field";
    return false;
  }
  if(email.indexOf('@') <= 0 ){
    document.getElementById('email').innerHTML =" ** @ Invalid Position";
    return false;
  }

  if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
    document.getElementById('email').innerHTML =" ** . Invalid Position";
    return false;
  }






  if(password == ""){
    document.getElementById('password').innerHTML =" ** Please fill the password field";
    return false;
  }
  if((password.length <= 5) || (password.length > 20)) {
    document.getElementById('password').innerHTML =" ** Passwords lenght must be between  5 and 20";
    return false;	
  }


  if(password!=password2){
    document.getElementById('password2').innerHTML =" ** Password does not match the confirm password";
    return false;
  }



  if(password2 == ""){
    document.getElementById('password2').innerHTML =" ** Please fill the confirmpassword field";
    return false;
  }




  // if(mobileNumber == ""){
  //   document.getElementById('mobileno').innerHTML =" ** Please fill the mobile NUmber field";
  //   return false;
  // }
  // if(isNaN(mobileNumber)){
  //   document.getElementById('mobileno').innerHTML =" ** user must write digits only not characters";
  //   return false;
  // }
  // if(mobileNumber.length!=10){
  //   document.getElementById('mobileno').innerHTML =" ** Mobile Number must be 10 digits only";
  //   return false;
  // }



  
}
