<?php 
    if(!empty($response)) 
    { 
        echo $response["type"]; 
        echo $response["message"];

        if(isset($_GET['place'])){
            if($_GET['place'] == 'null'){
                echo "You Must Enter a place Name";
            }        

        }   
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <h1>welcome to blog</h1>
    <a href="creatblog.php">Create You own</a>

    <h5>
   <?php
   if(file_exists('blogs.txt')){
    $file = fopen('blogs.txt', 'r');
    $status = false;
    while(!feof($file)){
        $data = fgets($file);
        $post = explode("|", $data);
        $files = glob("image/*.*",GLOB_BRACE);
         foreach($post as $value )
         {
             echo $value."<br>";
            
            foreach($files as $f){
                printf("<img src='image/%s' />",basename($f));
            }
             
             // $files = glob("upload/*.*");
 
             // for ($i=0; $i<count($files); $i++) {
             // $image = $files[$i];
             
             // echo '<img src="'.$image .'" width="100" height="100" alt="Random image" />'."<br /><br />";
             // }
         }
         echo "<hr>";
        
    }
 
   }
   else{
    echo "File Does not exist";
   }
   

?>


</h5>


</body>
</html>