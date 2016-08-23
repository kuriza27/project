<?php
	$servername	 = "localhost";
	$username	 = "promobands_user";
	$password 	 = "oUjZNm1ZJR";
	$dbname 	 = "promobands_db";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
?>