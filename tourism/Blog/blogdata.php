

<?php
if (isset($_POST["upload"])) {
  
    $fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);
    $width = $fileinfo[0];
    $height = $fileinfo[1];
    
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg"
    );
    
   
    $file_extension = pathinfo($_FILES["file-input"]["name"], PATHINFO_EXTENSION);
    
   
    if (! file_exists($_FILES["file-input"]["tmp_name"])) {
        $response = array(
            "type" => "error",
            "message" => "Choose image file to upload."
        );
    }   
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $response = array(
            "type" => "error",
            "message" => "Upload valid images. Only PNG and JPEG are allowed."
        );
    }    
    else if (($_FILES["file-input"]["size"] > 2000000)) {
        $response = array(
            "type" => "error",
            "message" => "Image size exceeds 2MB"
        );
    }    
    else if ($width > "300" || $height > "200") {
        $response = array(
            "type" => "error",
            "message" => "Image dimension should be within 300X200"
        );
    } else {
        $target = "image/" . basename($_FILES["file-input"]["name"]);
        if (move_uploaded_file($_FILES["file-input"]["tmp_name"], $target)) {
            $response = array(
                "type" => "success",
                "message" => "Image uploaded successfully."
            );
        } else {
            $response = array(
                "type" => "error",
                "message" => "Problem in uploading image files."
            );
        }
    }
}

if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    session_start();
}
if($_SESSION['login_user']['username']){
    echo " Plaease Login first";
    header('location:../login.php');
}
else{
    $name = $_SESSION['login_user']['username'];

}


$src = $_FILES ['myfile']['tmp_name'];
$des ="image/".$_FILES['myfile']['name'];
$place = $_POST['place'];
$date = $_POST['date'];
$text = $_POST['text'];
if($place =='' && $text == ''){
    header('location:creatblog.php?place=null');
}
else{
    $new_post = $place."|".$text."|".$date."|".$name."\r\n";
    if(file_exists('blogs.txt')){
        $file = fopen('blogs.txt', 'a');
        fwrite($file, $new_post);
        if(move_uploaded_file($src, $des)){
          header('location:../home.php');
        }else{
          echo "Error";
        }
    }
    else{
        $file = fopen('blogs.txt','a');
    }
  
}


?>