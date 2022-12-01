<?php
include 'connect.php';
?>

<html>

<head>
    <title>products</title>
</head>

<body>
    <fieldset align="center">
        <legend>OUR PRODUCTS</legend>
        <button> <a href="addProducts.php">Add Products</a> </button>
        <br>
        
        <table align="center" border='3'>
            <tr>
                <th>Product Name ||</th> 
                <th>Buying Price ||</th>&ensp; 
                <th>Selling Price ||</th>&nbsp;&nbsp;
                <th>Profit ||</th>&nbsp;&nbsp;
                <th>Update/Delete ||</th>&nbsp;&nbsp;
            </tr>


            <?php
                $sql = "select * from phone";
                $res = mysqli_query($conn,$sql);
                if($res){
                    while($data = mysqli_fetch_array($res)){
                        $name = $data['Name'];
                        $sprice = $data['sprice'];
                        $bprice = $data['bprice'];
                        $profit = $data['profit'];


                        echo '<tr>
                            <td>'.$name.'</td>
                            <td>'.$bprice.'</td>
                            <td>'.$sprice.'</td>
                            <td>'.$profit.'</td>
                            <td>
                                <button><a href="editProducts.php?name='.$name.'">Update</a></button>
                                <button><a href="deleteProducts.php?name='.$name.'">Delete</a></button>
                            </td>   
                            </tr>';

                    }
                }

            ?>
        
        </table>
    </fieldset>
</body>

</html>