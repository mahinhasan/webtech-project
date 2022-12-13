<html>

<head>

    <title>signup</title>
    <script src="../assets/js/regi.js"></script>
</head>

<body>
    <?php include_once('navbar.php'); ?>

    <fieldset>
        <legend>
            <h1>Register</h1>
        </legend>
        <form name="myForm" method="post" action="../controllers/users/regiCheck.php" onsubmit="return (validate());">

            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="id"><b>ID : </b></label><br>
            <input type="text" placeholder="Enter Id" name="id"  ><br>

            <label for="name"><b>User Name : </b></label><br>
            <input type="text"  name="name" id="name" ><br>
            <span id="error"></span>

            <label for="email"><b>Email</b></label><br>
            <input type="text" name="email" id="email" ><br>

            <label for="password"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="password" id="psw" ><br>

            <label for="pswrepeat"><b>Repeat Password</b></label><br>
            <input type="password" placeholder="Repeat Password" name="pswrepeat" id="psw-repeat" ><br>
            <label for="phone"><b>Enter Phone </b></label><br>
            <input type="text" name="phone" id="phone" ><br>
            <label for="gender"><b>Gender </b></label><br>
            <input type="text" name="gender" id="gender" ><br>

            <label for="usertype"><b>User Type [User/Admin]:</b></label><br>
            <select name="usertype" id="cars">
                <option value="-1" selected>[choose yours]</option>

                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <hr>



            <input type="submit" class="registerbtn" value="Register">



            <p>Already have an account? <a href="#">Sign in</a>.</p>

        </form>
    </fieldset>

</body>

</html>