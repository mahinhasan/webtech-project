<?php



    $conn = mysqli_connect('localhost','root','','Mobile');
    $data = "select * from phone";
    $result = mysqli_query($conn,$data);
    echo "<fieldset>";
    echo "<legend>"."PRODUCT"."</legend>";
    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Buying Price</th>
                <th>Selling Price</th>
                <th>Profit</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>";
            while($row = mysqli_fetch_array($result))

                {
                    echo "<tr>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['bprice'] . "</td>";
                    echo "<td>" . $row['sprice'] . "</td>";
                    echo "<td>" . $row['profit'] . "</td>";
                    echo "</tr>";
                }
    echo "</table>";
    echo "</fieldset>";
   
?>