<?php
include("connect.php");
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: acasa.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Evidenta Manualelor Alternative Acceptate de Minister</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.header {
  padding: 60px;
  text-align: center;
  background: #1a76bc;
  color: white;
}

.header h1 {
  font-size: 40px;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


.navbar a.right {
  float: right;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.navbar a.active {
  background-color: #666;
  color: white;
}

.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>
<div class="header">
  <h1>Evidenta Manualelor Alternative Acceptate de Minister</h1>
</div>

<div class="navbar">
  <a href="acasa.html">Home</a>
  <a href="index.html">Login</a>
  <a href="InfoManuale.php">Manuale</a>
  <a href="InfoAutori.php">Autori</a>
  <a href="InfoScoli.php">Scoli</a>
  <a href="InfoEdituri.php">Edituri</a>
  <a href="InfoElevi.php">Elevi</a>
</div>

 <nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Meniu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="Edituri.html">Statistici edituri</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="Elevi.html">Statistici elevi</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="ManualeAcceptateDeMinister.html">Statistici manuale acceptate de minister</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="Autori.html">Statistici autori</a>
</nav>
<div class="w3-container" style="margin-left:250px">
  <table class="w3-table-all">
    <tr>
      <th>Nume</th>
	   <th>Prenume</th>
	    <th>Telefon</th>
		 <th>Email</th>
		 <th>Manual</th>
	    <th>Clasa</th>
		 <th>Editura</th>
    </tr>
<?php
include_once 'connect.php';
mysqli_set_charset($conn, "utf8mb4");

echo "<center><h1>Informatii despre autori</h1></center>";
$sql = "SELECT A.Nume as Nume, A.Prenume as Prenume, A.Telefon as Telefon , A.Email as Email, M.Denumire as Materie, M.Clasa as Clasa, Ed.Denumire as Editura
	    FROM Autor A join AutorManual AM on A.AutorID = AM.AutorID
					 join Manual M on AM.ManualID = M.ManualID
                     join Editura Ed on Ed.EdituraID = M.Editura_ID
		GROUP BY A.Nume, A.Prenume, M.Denumire
		";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
	{	 
		while($row = mysqli_fetch_assoc($result))
		{
		echo "<div><tr><td>" . $row["Nume"] . "</td>   <td>" . $row["Prenume"] . "</td>   <td>" . $row["Telefon"] . "</td>   <td>" . $row["Email"] . "</td> <td>" . $row["Materie"] . "</td>  <td>" . $row["Clasa"] . "</td>   <td>"
			  . $row["Editura"] ."</td></tr></div>";
		}
	}
	else {
		echo "No results";
	     }
	$conn->close();
?>
  </tr>
  </table>
<div class="content">
		<!--<center><img class="img-responsive" src="schoollogo2.png" alt="Books"></center>-->
		</div>
	</body>
</html>