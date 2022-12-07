
<?php
// include ('header.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Views/css/SignIn.css">
    
    <title>Login</title>
</head>

<body>
    <!-- ........... -->
    <header>
    <a href="../../index.php"> <img  id="header-logo" src="../../assets/images/logo.png" alt=""></a> 
        <nav class="">
            <ul class="nav-bar">
            <li><a href="../../index.php">Home</a></li>
                <li><a href="">Package</a></li>
                <li><a href="">Events</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Explore</a></li>
                <li><a href="">Place</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Planning</a></li>
                <li><a href="map.php">Map</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </nav>
        <!-- <a class="btn" href="Login.html">Sign in</a> -->
    </header>

<!-- ............. -->
    <section  class="cxv" >
    
     
         <div class="login-body">
            <div class="right-half">
            <a href="../../index.php"> <img id="logo" src="../../assets/images/logo.png" alt=""><br></a> 
                <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>  <br>  
     	<?php } ?>
                
                    
                <form action="../../Controllers/loginCheck.php" method="post" >
                <input class="inp" type="text" name="username" id="username" placeholder="username"   >  <br>

                <?php   if (isset($usernameerror)) { ?>

                  <span style="color: red;">  <?php echo $usernameerror ; ?></span>   <br>  
  
                <?php  } ?> 

                <input class="inp" type="password" name="password" id="password" placeholder="Password" > <br>

                <?php   if (isset($passworderror)) { ?>

                
                    <span style="color: red;"><?php echo $passworderror ; ?></span>  <br>


 
                <?php  } ?> 

                <input type="checkbox" name="rememberme" id="check-box"  > Remember Me


                <a href="" id="Forgot-pass">Forgotten Password?</a><br>
                <input id="sign-in-button" type="submit" name="login" value="Login"> <br>

               <?php   if (isset($loginproblem)) { ?>

                <b>  <span style="color: red;"><?php echo $loginproblem ; ?></span>   </b> <br>   


                <?php  } ?> 
               
     
                </form>
                <p class="sign-up-link">Don't Have an account..? <a href="Signup.php" class="Sign-Up">Sign Up</a> here</p>

            </div>
         </div>
        

    </section>

</body>

</html>