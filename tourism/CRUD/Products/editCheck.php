<?php
    include 'connect.php';
    $name = $_GET['name'];
    if(isset($_POST['update'])){
        $pname = $_POST['iteamname'];
        $bprice = $_POST['buy'];
        $sprice = $_POST['sell'];
        $profit = $sprice - $bprice;
        
        
        $data = "UPDATE phone SET Name = '$pname', bprice = $bprice,sprice=$sprice,profit=$profit WHERE Name='$name'";
        
        $result = mysqli_query($conn,$data);
    
        if($result){
            header('location:diplayProducts.php');
        }
        else{
            echo "Error";
        }
    }else{
        echo "Sorry!";
    }
?>
