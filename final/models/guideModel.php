<?php

require_once "db.php";

// function insertGuide($blogPost){
//     $conn = getConnection();
//     $sql = "insert into `blogs` (title,content) values('{$blogPost['title']}','{$blogPost['content']}')";
//     $status = mysqli_query($conn, $sql);
//     return $status;

// }

function displayAllGuide(){
    $conn = getConnection();
    $sql = "select * from guides";
    $res = mysqli_query($conn, $sql);
    return $res;
}



?>