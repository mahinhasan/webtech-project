<html>

<head>
    <title>home</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="fnav">
            <div class="log">
            </div>
            <ul>
            <li class="logo"><a href="index.php"> Toursim</a></li>
                <?php
                session_start();

                if (isset($_SESSION['status'])) {

                        echo "<li>" . "<a href='logout.php'>logout</a>" . "</li>";
                        echo "<li>" . "<a href='profile.php'>profile</a>" . "</li>";

                    }

                    else {
                        echo "<li>" . "<a href='login.php'>login</a>" . "</li>";
                        echo "<li>" . "<a href='signup.php'>Signup</a>" . "</li>";
                }

                ?>
               

                <li><a href="planing.php">Planing</a></li>
                <li><a href="about.php">Author</a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
        </div>
        <div class="post">
        </div>
    </div>
</body>

</html>