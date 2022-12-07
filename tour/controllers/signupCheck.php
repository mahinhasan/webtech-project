

<?php
session_start();
require_once('../model/usersmodel.php');

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $usertype = $_POST['usertypes']; 
}


    ?>
    
<script>
    if(        (usernameerror ||
            emailerror ||
            passworderror ||
            password2error) == false) {
</script>
    <?php

            $conn = getConnection();
                $userinfo = [
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'password2' => $password2,
                    'usertypes' => $usertype
                ];
            
                $status = insertUser($userinfo);
                if($status){
                    header('location: ../Views/users/Login.php');
                }else{
                    echo "failed to insert!";
                       }
            
      
?>

<script>
                    }
</script>