<?php
    session_start();
    require_once "../../models/planeModel.php";
    
    $destination = $_POST['title'];
    $location= $_POST['location'];
    $date= $_POST['date'];


    if($destination == ""){
        header('location: ../../views/createPlane.php');
    }else{      
        
        $plane = ['destination'=>$destination, 'location'=>$location,'date'=> $date];
        $status = insertPlane($plane);
        

        if($status){
            header('location: ../../views/login.php');
        }else{
           echo "DB error";
        }
    }

?>