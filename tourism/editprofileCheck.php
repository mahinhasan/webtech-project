<?php
include 'home.php';
if (!isset($_SESSION['username'])) {
    include "not_found.php";
    exit;
}

$username = $_SESSION['username'];
$user = GetUserInfo($username);
$msg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user = updateINFO($_POST, $username);
    $msg = "Value updated successfully";
}
?>