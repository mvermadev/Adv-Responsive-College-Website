<?php 
	
	$port = 'localhost';
	$user = 'root';
	$password = '';
	$dbname = 'CollegeDB';
	$conn = mysqli_connect($port, $user, $password, $dbname);

	if (!$conn) {
		die('connection Denied: '. mysqli_error($conn).'<br>');
	}
	echo "Connection Access <br>";	

	$table = "CREATE TABLE ApplyForm (
				Id INT AUTO_INCREMENT PRIMARY KEY,
				Name VARCHAR(30) NOT NULL,
				Email VARCHAR(50) NOT NULL,
				ContactNo VARCHAR(12) NOT NULL,
				DOB DATE NOT NULL,
				Gender VARCHAR(20) NOT NULL,
				Qualification VARCHAR(20) NOT NULL,
				Address VARCHAR(200) NOT NULL
			)";

	$retval = mysqli_query($conn, $table);
	if (!$retval) {
		die('DB not able to create table '. mysqli_error($conn).'<br>');
	}
	echo "DB is succesfully created table <br>";

	mysqli_close($conn);

 ?>