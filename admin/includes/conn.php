<?php
	$conn = new mysqli('localhost', 'root', 'ritik8953', 'payroll2');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>