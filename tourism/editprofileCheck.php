<?php
session_start();

$username = $_SESSION['username'];
$email = $_SESSION['email'];
$msg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user = updateINFO($_POST, $username,$email);
    $msg = "Value updated successfully";
}

?>