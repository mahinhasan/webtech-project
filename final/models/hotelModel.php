<?php 
    require_once "db.php";

    function addHotel($hotel){
        $con = getConnection();
        $sql = "insert into hotel values('', '{$hotel['name']}', '{$hotel['location']}', '{$hotel['mobile']}', '{$hotel['class']}', '{$hotel['rent']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function editHotel(){
        
    }

    function allHotel(){
        $conn = getConnection();
        $sql = "select * from hotel";
        $res = mysqli_query($conn, $sql);
        return $res;
    }

?>