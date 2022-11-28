<?php
// Eingabeparameter für Datenbank 

$servername = "localhost";
$username = "root";
$password = "root";
$database ="Produkte";

// Verbindung zu Datenbank aufbauen, Parameter übergeben 

$con = new mysqli($servername, $username, $password, $database);
	if ($con->connect_error) {
      die("Verbindung fehlgeschlagen: " . $con->connect_error);
	}
	echo "Connected successfully", '<br>';


?>