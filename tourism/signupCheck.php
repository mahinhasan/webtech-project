<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if($username == "" || $password == "" || $email == ""){
        header('location: signup.php?err=null');
    }else{      
        $user = $username."|".$password."|".$email."\r\n";
        $all_user = ['username'=> $username, 'password'=>$password, 'email'=>$email];
        $_SESSION['all_user'] = $all_user;

        $file = fopen('user.txt', 'a');
        fwrite($file, $user);

        header('location: login.php');
    }

?>