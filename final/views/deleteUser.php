<?php
    include '../models/db.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    $con = getConnection();
        $sql = "DELETE FROM `users` WHERE id ='$id'";
        $result = mysqli_query($con,$sql);

        if($result){
            header('location:admin.php');
        }else{
            die(mysqli_error($con));
        }
    }
