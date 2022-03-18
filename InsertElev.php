<?php
include_once 'connect.php';
$Nume = $_POST['Nume'];
$Prenume = $_POST['Prenume'];
$CNP = $_POST['CNP'];
$Clasa = $_POST['Clasa'];
$Scoala = $_POST['Scoala'];
$var = "SELECT ScoalaID FROM Scoala WHERE Denumire = '$Scoala';";
$ScoalaID = mysqli_query($conn, $var);
if (mysqli_num_rows($ScoalaID) > 0)
{$row = mysqli_fetch_assoc($ScoalaID);
$result = "INSERT INTO Elev (Nume,Prenume,CNP,Clasa,ScoalaID) VALUES ('$Nume','$Prenume','$CNP','$Clasa',". $row["ScoalaID"].");";
mysqli_query($conn, $result);
header("Location: ../Insert.html");
}
else header("Location: ../Insert.html?Scoala=NuExista");
?>