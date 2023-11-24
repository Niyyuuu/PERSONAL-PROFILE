<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "admin";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection Failed: " . $conn->connect_error);
	}
	?>