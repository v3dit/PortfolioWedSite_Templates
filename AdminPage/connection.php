<?php
$servername = "localhost";
$username = "vb123";
$password = "Rpu3-1mo.l4/YJQg";
$dbname = "vb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>