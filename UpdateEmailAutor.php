<?php
include_once 'connect.php';
$Nume = $_POST['Nume'];
$Prenume = $_POST['Prenume'];
$Telefon = $_POST['Telefon'];
$Email = $_POST['Email'];
$EmailUpdate = $_POST['EmailUpdate'];
$result = "UPDATE Autor SET Email = '$EmailUpdate' WHERE Nume = '$Nume' AND Prenume = '$Prenume' AND Telefon = '$Telefon';";
mysqli_query($conn, $result);
header("Location: ../Update.html");
?>