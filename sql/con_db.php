<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdname = "captain";

// Create connection
$connect = new mysqli($servername, $username, $password, $bdname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
// echo "Connected successfully";
?>