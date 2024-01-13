<?php
 	$servername = "localhost";
 	$username = "admin9";
 	$password = "practice9";
 	$dbname = "practice9";
 	// Create connection
 	$conn = new mysqli($servername, $username, $password, $dbname);
 	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
 	}
?>