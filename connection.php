<?php 
$servername = "localhost";
$username = "root";
$password = "";
//create connection
$conn = new mysqli($servername, $username, $password);
//check connection
if ($conn->connect_error)
die("connection failed: ". $conn->connect_error);
echo "Connected successfully!";
?>
