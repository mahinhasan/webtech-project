<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Home</title>
</head>
<body>
    <h2>Welcome to Toursim</h2>

    <a href="createPost.php">Create New Post</a>
   <h5>
   <?php
   
   $file = fopen('posts.txt', 'r');
   $status = false;
   while(!feof($file)){
       $data = fgets($file);
       $post = explode("|", $data);
        foreach($post as $value)
        {
            echo $value."<br>";
            // $files = glob("upload/*.*");

            // for ($i=0; $i<count($files); $i++) {
            // $image = $files[$i];
            
            // echo '<img src="'.$image .'" width="100" height="100" alt="Random image" />'."<br /><br />";
            // }
        }
       
   }


?>


</h5>


<?php


?>
</body>
</html>