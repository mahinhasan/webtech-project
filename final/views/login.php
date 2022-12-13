<html >

<head>
    <script src="../assets/js/login.js"></script>
</head>

<body>
<?php include_once('navbar.php'); ?>

    <fieldset>
        <legend> <b> LOGIN </b></legend>
        <form name="myForm" action="../controllers/users/loginCheck.php" method="post" onsubmit="return (validate());" >


            <div class="container">
                <label for="id"><b>Enter ID</b></label><br>
                <input type="text" placeholder="Enter Username" name="username"><br>

                <label for="password"><b>Password</b></label><br>
                <input type="password" placeholder="Enter Password" name="password" ><br>

                <input type="submit" value="Login"><br>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
            <hr>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span><br>
            </div>
        </form>
    </fieldset>
</body>

</html>