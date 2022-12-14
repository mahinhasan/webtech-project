<?php
include_once "../controllers/users/editCheck.php";




?>


<html>
<head>
    <title>update user</title>
    <link rel="stylesheet" href="../assets/css/reg.css">

</head>
<body>
<?php 
include_once('navbar.php');
include_once('../models/userModel.php');
?>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $res = updateUser($id);

    if(mysqli_num_rows($res)){
        
        foreach($res as $r){

       
        
        ?>

      
    <fieldset >
    <legend align="center"><h2 style="text-align: center;">Update User </h2></legend>
    <form name="myForm" method="post" action="../controllers/users/regiCheck.php" onsubmit="return (validate());">
        <div class="register">
            
            <label for="name"><b>User Name : </b></label><br>
            <input type="text" name="name" value="<?=$r['username'] ?>" id="name"><br>
            <span id="error"></span>

            <label for="email"><b>Email</b></label><br>
            <input type="text" name="email" id="email" value="<?=$r['email'] ?>"><br>

            <label for="password"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="password" id="psw" value="<?=$r['password'] ?>"><br>


            <label for="pswrepeat"><b>Repeat Password</b></label><br>
            <input type="password" placeholder="Repeat Password" name="pswrepeat" id="pass2" value="<?=$r['pswrepeat'] ?>"><br>
            <div id="error-nwl"></div>

            <label for="phone"><b>Enter Phone </b></label><br>
            <input type="text" name="phone" id="phone" value="<?=$r['phone'] ?>"><br>
            <label for="gender"><b>Gender </b></label><br>
            <select name="gender" id="gender" value="<?=$r['gender'] ?>">
                <option  value="-1" selected>Select Gender</option>
                <option name="gender" value="Male">Male</option>
                <option name="gender" value="Female">Female</option>
                <option name="gender" value="Female">Other</option>

            </select><br>

            <label for="usertype"><b>User Type :</b></label><br>
            <select name="usertype" id="cars" value="<?=$r['usertype'] ?>">
                <option value="-1" selected>Select Type</option>

                <option value="user">user</option>
                <option value="admin">admin</option>
            </select><br>
           
            <input type="submit" class="registerbtn" value="Register"><br>
            <p>If You have already register <a href="">login</a></p>
        </div>

    </form>
    </fieldset>
    <?php
         }
    }else{
        ?>
        <h4>No data Found!</h4>
        <?php
    }
}



?>

</body>
</html>