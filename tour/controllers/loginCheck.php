
<?php
require_once('../model/usersmodel.php');

session_start();

if(isset($_POST['login'])){
    $username = $_POST['username'];
  $password= $_POST['password'];

    if (empty($username)) {
        $usernameerror = 'please enter your username';
    }
    
    
    
    if (empty($password)) {
        $passworderror = 'please enter your password';
    }
    
    
    
    
    include('../Views/users/Login.php');

}


  
    if(empty($usernameerror) &&  empty($passworderror) )
    {
		    
    $conn = getConnection();
    $sql = "select * from regusers where username='$username' and password='$password'";
    $result = mysqli_query($conn,$sql);
   
    $count = mysqli_num_rows($result);
    // $row = mysqli_fetch_assoc($result);
    if($count == 1 ){
        $row = mysqli_fetch_array($result);
        if($row["usertype"]=="customer")
            {   
              $_SESSION['flag'] = true;
             $_SESSION['username'] = $username;
                  
          header("location: ../Views/users/home.php");
	
	        }elseif($row["usertype"]=="admin")
            {
                  $_SESSION['flag'] = true;
                  $_SESSION['username'] = $email;
                  header("location: ../Views/users/admin.php");

            }elseif($row["usertype"]=="manager")
            {
                $_SESSION['flag'] = true;
                  $_SESSION['username'] = $username;
                  header("location: ../Views/manager.php");
                
            }elseif($row["usertype"]=="tourguide")
            {
                  $_SESSION['flag'] = true;
                  $_SESSION['username'] = $username;
                  header("location: ../Views/users/tourguide.php");
            }
    }
    else {
        header("Location: ../Views/user/Login.php?error=Incorect Username or password");
    }

    }
    
    else{
        
        return false;
        
    
    }
		

	




?>