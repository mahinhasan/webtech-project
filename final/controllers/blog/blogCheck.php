<?php
session_start();
require_once "../../models/blogModel.php";

if(isset($_POST['']))



$title = $_POST['title'];
$content = $_POST['content'];
$img = $_FILES['img']['name'];
$img_ext = pathinfo($img, PATHINFO_EXTENSION);
$filename = time() . '.' . $img_ext;
if ($title == "" || $content == "") {
    header('location: ../../views/index.php');
} else {

    $blogPost = ['title' => $title, 'content' => $content,'img'=>$filename];
    $status = insertBlog($blogPost);

    if ($status) {
        move_uploaded_file($_FILES['img']['tmp_name'], '../../assets/images/' . $filename);
        header('../../views/blog.php');
    }else{
        header('../../views/createBlog.php');
        die("Connection failed: " . mysqli_connect_error());
       
    }
    
}

?>