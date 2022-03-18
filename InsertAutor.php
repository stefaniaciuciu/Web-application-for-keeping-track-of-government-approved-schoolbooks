<?php
include_once 'connect.php';
$Nume = $_POST['Nume'];
$Prenume = $_POST['Prenume'];
$Telefon = $_POST['Telefon'];
$Email = $_POST['Email'];

$result = "INSERT INTO Autor (Nume,Prenume,Telefon,Email) VALUES ('$Nume','$Prenume','$Telefon','$Email');";
mysqli_query($conn, $result);
header("Location: ../Insert.html");
?>