<?php 

    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname= "tourism";

    function getConnection(){
        global $host;
        global $dbname;
        global $dbpass;
        global $dbuser;
        return $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    }

?>