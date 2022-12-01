<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
</head>

<body>
    <fieldset align='center'>
        <legend>Register</legend>
        <form method="POST" action="signupValid.php">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname"><br><br>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email"><br><br>
            <label for="password">Password:</label>
            <input type="text" id="password" name="password"><br><br>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone"><br><br>

            <label for="birth">Date Of Birth:</label>
            <input type="date" id="birth" name="birth"><br><br>


            <p>What is your gender?</p>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female

            <br><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </fieldset>
</body>

</html>