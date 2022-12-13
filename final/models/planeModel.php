<?php

require_once "db.php";



function insertPlane($plane)
{
    $con = getConnection();
    $sql = "insert into tourPlane values('{$plane['destination']}', '{$plane['location']}', '{$plane['date']}')";
    $status = mysqli_query($con, $sql);
    return $status;
}
?>