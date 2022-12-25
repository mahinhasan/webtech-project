<?php



?>


<html>

<head>
    <title>Blog</title>
    <link rel="stylesheet" href="../assets/css/reg.css">
    <script src="../assets/js/blog.js"></script>
</head>

<body>
    <?php 
    include_once('navbar.php');
    if(!isset($_SESSION['status'])){
        header('login.php');
    }
    
    ?>

    <form method="post" name="myForm" action="../controllers/blog/blogCheck.php" enctype="multipart/form-data" onsubmit=" return validate();">
        <fieldset>
            <legend>Create Blog</legend>
            Title Here: <input type="text" name="title" value="" /> <br>
            Body Of Content: <textarea name="content" id="" cols="30" rows="10"></textarea><br>
            Image :   <input type="file" id="img" name="img" accept="image/*"><br>    

            <input type="submit" name="btn" value="Submit" />
        </fieldset>
    </form>
</body>

</html>