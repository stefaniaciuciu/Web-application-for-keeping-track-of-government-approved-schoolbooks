<?php
include_once 'connect.php';
$Nume = $_POST['Nume'];
$Prenume = $_POST['Prenume'];
$Clasa = $_POST['Clasa'];
$CNP = $_POST['CNP'];
$Scoala = $_POST['Scoala'];
$result = "DELETE FROM Elev WHERE CNP = '$CNP'";
mysqli_query($conn, $result);
header("Location: ../Delete.html");
?>