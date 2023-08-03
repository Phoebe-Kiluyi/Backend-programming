<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bscs-db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO myguests (firstname, lastname, email)
VALUES ('Peter', 'Mwilu', 'p@gmail.com');";
$sql .= "INSERT INTO myguests (firstname, lastname, email)
VALUES ('Maggie', 'mwilo', 'maggie@gmail.com');";
$sql .= "INSERT INTO myguests (firstname, lastname, email)
VALUES ('Sammy ', 'Mulandy', 'sam@gmail.com')";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>