<?php
use LDAP\Result;
    include 'connect.php';

    if(isset($_GET['name'])){
        $name = $_GET['name'];
        $sql = "DELETE FROM `phone` WHERE Name ='$name'";
        $result = mysqli_query($conn,$sql);

        if($result){
            header('location:diplayProducts.php');
        }else{
            die(mysqli_error($conn));
        }
    }

?>