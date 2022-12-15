<?php

if (isset($_POST['update'])) {
    include('../../models/db.php');
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pswrepeat = $_POST['pswrepeat'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $usertype = $_POST['usertype'];
    $con = getConnection();
    $query = "update users set username='$username',email='$email',password='$password',pswrepeat='$pswrepeat',phone='$phone',gender='$gender',usertype='$usertype' where id='$id'";
    $res = mysqli_query($con, $query);
    if($res){
        $_SESSION['message'] = "Update Successfull";
        header('location:../../views/index.php');
    }
    else{
        header('location:../../views/admin.php');
    }

}
