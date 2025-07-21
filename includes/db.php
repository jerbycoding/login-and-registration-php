<?php
	DEFINE('SERVERNAME' , 'localhost');
	DEFINE('USERNAME', 'root');
	DEFINE('DATABASE', 'lars');
	$conn = new mysqli(SERVERNAME,USERNAME,'',DATABASE);

	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}


?>