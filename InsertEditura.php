<?php
include_once 'connect.php';
$Denumire = $_POST['Denumire'];
$Email = $_POST['Email'];
$Adresa = $_POST['Adresa'];

$result = "INSERT INTO Editura (Denumire,Email,Adresa) VALUES ('$Denumire','$Email','$Adresa');";
mysqli_query($conn, $result);
header("Location: ../Insert.html");
?>