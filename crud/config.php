<?php 
    error_reporting(0);
    session_start();

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "learn_hasil";

    $conn = mysqli_connect($host, $user, $pass, $db);
?>