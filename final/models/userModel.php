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

function getUserId($id)
{
    $con = getConnection();
    $query = "select * from users where id='$id'";
    $users = mysqli_query($con, $query);
    return $users;
}

function updateUser($user)
{
    $con = getConnection();
    $query = "update users set  username='{$user['username']}', '{$user['email']}',password='{$user['password']}', pswrepeat='{$user['pswrepeat']}',phone='{$user['phone']}',gender='{$user['gender']}', usertype='{$user['usertype']}' where id='{$user['id']}'";
    $res = mysqli_query($con, $query);
    return $res;
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