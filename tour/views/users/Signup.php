<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign Up</title>
  <link rel="stylesheet" href="../../Views/css/signupp.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
  <script src="../../controllers/signupValidation.js"></script>
</head>

<body>
  <div class="signup-box"> <br>
    <h1 style="font-family: Sans-serif ; color: #12044e; font-style: italic ">Sign Up</h1>

    <form name="signupform" onsubmit="return form()" action="../../Controllers/signupCheck.php" method="POST">



      <label for="username"></label> <br> <br>
      <input  type=" text" name="username" id="username" placeholder="username" />
      <small class="validate" id="usernameerror"></small>   


      <label style="font-family: Sans-serif ; color: #12044e" for="usertype"> Choose your role:</label>
      <select name="usertypes">
        <option value=""></option>
        <option value="admin">admin</option>
        <option value="customer">customer</option>
        <option value="manager">manager</option>
        <option value="tourguide">tourguide</option>
      </select>



      <label for="email"></label> 
      <input type="email" name="email" id="email" placeholder="Email" />
     <center> <small class="validate" id="emailerror"></small></center> 


      <label for="userpassword"></label> 
      <input type="password" name="password" id="password" placeholder="Password" />
     <center><small class="validate" id="passworderror"></small></center> 


      <label for="password2"></label> 
      <input type="password" name="password2" id="password2" placeholder="Confirm Password" />
     <center> <small class="validate" id="password2error" ></small> </center>


      <label for="submit"></label> 
      <input style="margin-top:10px" id="btn" type="submit" name="Submit" value="submit">




    </form>

  </div>
  <p class="para-2">
    Already have an account? <a href="login.php">Login here</a>
  </p>
</body>

</html>