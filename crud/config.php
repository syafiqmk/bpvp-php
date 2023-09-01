<?php 
    error_reporting(0);
    date_default_timezone_set('Asia/Singapore');
    session_start();

    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define("DB_NAME", "learn_hasil");

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
?>