<?php
include_once 'connect.php';
$Nume = $_POST['Nume'];
$Prenume = $_POST['Prenume'];
$Clasa = $_POST['Clasa'];
$Scoala = $_POST['Scoala'];
$CNP = $_POST['CNP'];
$ClasaUpdate = $_POST['ClasaUpdate'];
$Scoala = $_POST['Scoala'];
$var = "SELECT ScoalaID FROM Scoala WHERE Denumire = '$Scoala';";
$ScoalaID = mysqli_query($conn, $var);
if (mysqli_num_rows($ScoalaID) > 0)
{$row = mysqli_fetch_assoc($ScoalaID);
$result = "UPDATE Elev SET Clasa = '$ClasaUpdate' WHERE Nume = '$Nume' AND Prenume = '$Prenume' AND CNP = '$CNP' AND ScoalaID = ". $row["ScoalaID"]."";
mysqli_query($conn, $result);
header("Location: ../Update.html");
}
else header("Location: ../Update.html?Update=fail");
?>