<?php
include_once 'connect.php';
$Username = $_POST['Username'];
$Password = $_POST['Password'];

$result = "INSERT INTO Accounts (Username,Password) VALUES ('$Username','$Password');";
mysqli_query($conn, $result);
header("Location: ../Insert.html");
?>