<?php
require_once('db.php');

function insertUser($userinfo){
    $conn = getConnection();
    $sql = "insert into regusers values('{$userinfo['username']}','{$userinfo['email']}','{$userinfo['password']}','{$userinfo['password2']}','{$userinfo['usertypes']}')";
    $row = mysqli_query($conn,$sql);
    if($row){
        return true;
    }else{
          return false;
      }
 
}

function validateUser($email,$password)
{
    $conn = getConnection();
    $sql = "select * from regusers where username='$username' and userpassword='$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if(count($row) > 0){
        return true;
    }else{
        return false;
    }
}

?>