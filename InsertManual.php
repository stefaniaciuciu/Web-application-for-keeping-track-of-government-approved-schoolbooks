<?php
include_once 'connect.php';
$Materie = $_POST['Materie'];
$Clasa = $_POST['Clasa'];
$Denumire = $_POST['Denumire'];
$Editura = $_POST['Editura'];
$var = "SELECT EdituraID FROM Editura WHERE Denumire = '$Editura';";
$EdituraID = mysqli_query($conn, $var);
if (mysqli_num_rows($EdituraID) > 0)
{$row = mysqli_fetch_assoc($EdituraID);
$result = "INSERT INTO Manual (Materie,Clasa,Denumire,Editura_ID) VALUES ('$Materie','$Clasa','$Denumire',". $row["EdituraID"].");";
mysqli_query($conn, $result);
header("Location: ../Insert.html");
}
else header("Location: ../Insert.html?Editura=NuExista");
?>