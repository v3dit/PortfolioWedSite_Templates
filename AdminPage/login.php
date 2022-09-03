<?php
require "connection.php";
session_start();

$uname = $_POST['uname'];
$password = $_POST['password'];

$sql = "SELECT u_password FROM `users` WHERE u_name='$uname'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    if($row["u_password"] === $password){
        $_SESSION["user"] = "$uname";
        echo '<script>alert("Welcome")</script>';
        echo '<script>window.location.href = "http://localhost/AdminPage/New.html";</script>';
        }
    else{
        echo '<script>alert("Incorrect Password");</script>';
        echo '<script>window.location.href = "http://localhost/AdminPage/login.html";</script>';
    }
  }
} else {
    echo 'alert("Incorrect Username");';
    echo '<script>window.location.href = "http://localhost/AdminPage/login.html";</script>';
}

 
?>