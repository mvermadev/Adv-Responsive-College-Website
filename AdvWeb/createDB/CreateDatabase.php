<?php 
	
	$port = 'localhost';
	$user = 'root';
	$password = '';
	$conn = mysqli_connect($port, $user, $password);
	if (!$conn) {
		die('connection Denied: '. mysqli_error($conn).'<br>');
	}
	echo "Connection Access <br>";

	$db = 'CREATE DATABASE CollegeDB';
	$retval = mysqli_query($conn, $db);
	if (!$retval) {
		die('DB not able to create '. mysqli_error($conn).'<br>');
	}
	echo "DB is succesfully created <br>";
		mysqli_close($conn);

 ?>