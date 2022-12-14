<?php 
    require_once "db.php";

    function addTransport($hotel){
        $con = getConnection();
        $sql = "insert into hotel values('', '{$hotel['name']}', '{$hotel['location']}', '{$hotel['mobile']}', '{$hotel['class']}', '{$hotel['rent']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function editTransport(){
        
    }

    function allTransport(){
        $conn = getConnection();
        $sql = "select * from transport";
        $res = mysqli_query($conn, $sql);
        return $res;
    }

?>