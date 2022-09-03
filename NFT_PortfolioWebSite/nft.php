<?php
$servername = "localhost";
$username = "vb123";
$password = "p/(GN[iU[W7YD2y6";
$database="test0";

$email=$_POST['email'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    $sql = "INSERT INTO `followers` (Emailtest0)
VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/NFT/Main.html");
    die();
} else {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Already registered! Use another Email');
    window.location.href='http://localhost/NFT/Main.html';
    </script>");
}
}

$conn->close();
?>