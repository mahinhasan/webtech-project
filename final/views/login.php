<html >

<head>
    <script src="../assets/js/login.js"></script>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
<?php include_once('navbar.php'); ?>

    <fieldset>
        <legend align="center"> <div class="form-header"><h1><b> LOGIN </b></h1></div></legend>
        <form name="myForm" action="../controllers/users/loginCheck.php" method="post" onsubmit="return (validate());" >


            <div class="container">
                <label for="username"><b>Enter username</b></label><br>
                <input type="text" placeholder="Enter Username" name="username"><br>

                <label for="password"><b>Password</b></label><br>
                <input type="password" placeholder="Enter Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required ><br>
                
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label><br>

                <input type="submit"  class="loginbtn" value="Login"><br>
               
            </div>
            <hr>

            <div>
                <span class="psw">  Do you want to remember your password? <a href="forgetpass.php">Forget password</a></span><br>
            </div>
        </form>
        <div id="message">
               <h3>Password must contain the following:</h3>
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
        </div>
    </fieldset>
</body>

</html>