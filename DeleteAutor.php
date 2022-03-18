<?php
include_once 'connect.php';
$Nume = $_POST['Nume'];
$Prenume = $_POST['Prenume'];
$Telefon = $_POST['Telefon'];
$Email = $_POST['Email'];

$result = "DELETE FROM Autor WHERE Nume='$Nume' AND Prenume='$Prenume' AND Telefon='$Telefon' AND Email='$Email';";
mysqli_query($conn, $result);
header("Location: ../Delete.html");
?>