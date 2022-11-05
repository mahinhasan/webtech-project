<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $retype_pass = $_POST['repassword'];

    if($username == ""){
        header('location: forgetPass.php?err=null');
    }else{

        $file = fopen('users.txt','r');
        while(!feof($file)){
            $data = fgets($file);
            $user = explode("|",$data);

            if(trim($user[0] == $username)){
                $old = trim($user[1]);
                $final = str_replace($old,$password,$data);
                file_put_contents('users.txt',$final);
                break;
            }
            
        }






    }
?>