<?php
    include 'connect.php';

    if(isset($_POST['submit'])){
        $pname = $_POST['iteamname'];
        $bprice = $_POST['buy'];
        $sprice = $_POST['sell'];
        $profit = $sprice - $bprice;
        
        //echo "Product : ".$pname."<br>"." Buy Price : ".$bprice."<br>"." Selling Price : ".$sprice;  
        
        $data = "INSERT INTO phone  VALUES ('{$pname}', '{$bprice}', '{$sprice}', '{$profit}');";
        $result = mysqli_query($conn,$data);
    
        if($result){
            header('location:diplayProducts.php');
        }
        else{
            echo "Error";
        }
    }






?>