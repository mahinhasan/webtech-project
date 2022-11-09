<?php
    session_start();
    $username = $_POST['username'];
    $email = $_POST['email'];
   

    if($username == ""){
        header('location: EditProfile.php?err=null');
    }else{
        
        $file = 'user.txt';
        if(file_exists('user.txt')){
            $new_name = nl2br(htmlspecialchars($username));
            $new_email = nl2br(htmlspecialchars($email));
            $handle = fopen($file,'w');
            fwrite($handle,$new_name,$new_email);
            fclose($handle);
        }
            
            
        }






    
?>