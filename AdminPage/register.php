<?php
require "connection.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$city = $_POST['city'];
$state = $_POST['state'];
$address = $_POST['address'];
$zip = $_POST['zip'];
$password = $_POST['password'];
$t_and_c = $_POST['t_and_c'];


$sql = "INSERT INTO `users` (fname, lname, u_name, u_city, u_state, u_address, u_zip, u_password, t_and_c)
VALUES ('$fname', '$lname', '$uname', '$city', '$state', '$address', '$zip', '$password', '$t_and_c')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("You have been registered sucessfully")</script>';
    echo '<script>window.location.href = "http://localhost/AdminPage/login.html";</script>';
} else {
    echo '<script>alert("Registeration error \nTry different Username")</script>';
    echo '<script>window.location.href = "http://localhost/AdminPage/register.html";</script>';
}

?>