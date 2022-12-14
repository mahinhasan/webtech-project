<?php
require_once "db.php";

function login($user)
{
    $con = getConnection();
    $sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count > 0){
        return true;
    }else{
        return false;
    }
}

function getUser($username){
    $con = getConnection();
    $sql = "Select * from users where username='$username'";
    $rslt = mysqli_query($con, $sql);
    return $rslt;
}

function insertUser($user)
{
    $con = getConnection();
    $sql = "insert into users values('{$user['id']}','{$user['username']}', '{$user['password']}', '{$user['pswrepeat']}', '{$user['email']}','{$user['phone']}','{$user['gender']}', '{$user['usertype']}')";
    $status = mysqli_query($con, $sql);
    return $status;
}

function editUser($user)
{

}

function deleteUser($user)
{

}

function allUser($user)
{

}

function getUserById($id)
{

}


// function getUser($id){
//     $con = getConnection();
//     $sql = "select * from users where id='$id'";
//     $result = mysqli_query($con, $sql);
//     $count = mysqli_num_rows($result);

//     if($count){
//         return $result; 
//     }
// }

function displayAllUser(){
    $conn = getConnection();
    $sql = "select * from users";
    $res = mysqli_query($conn, $sql);
    return $res;
}

?>