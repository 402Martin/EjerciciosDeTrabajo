<?php
$servername = "localhost";
$username = "wtu_user";
$pass = "MoonPass";
$dbname = "wtu_db";

// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($conn){
    echo 'connected';
}


$sql = "INSERT INTO users (email,password,code,confirmed)
VALUES ('moon@gmail.com', 'PassMoon', '5',01)";
?>