<?php


// $servername = "localhost";
// $username = "root";
// $password = "tiger123";
// $dbname = "registration"


$servername = "remotemysql.com";
$username = "0hLnuC7qN4";
$password = "I0dsja7vnp";
$dbname = "0hLnuC7qN4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
	
	//echo "Database Successfully Connected";
