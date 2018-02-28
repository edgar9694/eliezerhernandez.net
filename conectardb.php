<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fotografia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
			die("coneccion fallida" . $conn->connect_error);
		}

?>
