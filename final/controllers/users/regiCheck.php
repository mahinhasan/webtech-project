<?php
    session_start();
    require_once "../../models/userModel.php";
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['re-password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    if($username == "" || $password == "" || $email == ""){
        header('location: ../../views/signup.php?err=null');
    }else{      
        
        $user = ['username'=>$username, 'password'=> $password, 're-password'=> $repassword, 'email'=> $email ,'phone'=> $phone, 'gender'=> $gender];
        $status = insertUser($user);

        if($status){
            header('location: ../../views/login.php');
        }else{
           echo "DB error";
        }
    }

?>