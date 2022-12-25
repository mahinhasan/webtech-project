<?php

require_once "db.php";

function insertBlog($blogPost){
    $conn = getConnection();
    $sql = "insert into `blogs` (title,content,img) values('{$blogPost['title']}','{$blogPost['content']}','{$blogPost['img']}')";
    $status = mysqli_query($conn, $sql);
    return $status;

}

function displayAllBlog(){
    $conn = getConnection();
    $sql = "select * from blogs";
    $res = mysqli_query($conn, $sql);
    return $res;
}



?>