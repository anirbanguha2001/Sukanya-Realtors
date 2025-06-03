<?php
$host = "localhost";
$username = "u566985285_sukanya"; 
$password = "Realtors@2024"; 
$database = "u566985285_realtors";


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>