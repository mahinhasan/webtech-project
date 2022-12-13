<?php
    session_start();
    require_once "../../models/userModel.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        header('location: ../../views/login.php?err=null');
    }else{

        $user = ['username'=> $username, 'password'=>$password];
        $status = login($user);
        if($status){
            setcookie('status', 'true', time()+3600, '/');
            $_SESSION['status'] = $username;

            header('location: ../../views/index.php');
        }else{
            header('location: ../../views/login.php?err=invalid');
        }
    }
?>