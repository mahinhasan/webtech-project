<?php
session_start();
require_once "../../models/userModel.php";

$id = $_POST['id'];
$username = $_POST['name'];

$password = $_POST['password'];
$pswrepeat = $_POST['pswrepeat'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$usertype = $_POST['usertype'];


if ($id == "") {
    header('location: ../../views/signup.php?err=null');
} else {

    $user = ['id' => $id, 'username' => $username,  'password' => $password, 'pswrepeat' => $pswrepeat,'email' => $email,'phone' => $phone,'gender' => $gender, 'usertype' => $usertype,];
    $status = insertUser($user);


    if ($status) {
        header('location:../../views/login.php');
        $_SESSION['status'] = $username;
    } else {
        echo "DB error";
    }
}

?>