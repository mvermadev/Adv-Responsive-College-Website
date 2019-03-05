<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$quali = $_POST['quali'];
	$resq = "";
	foreach ($quali as $q) {
		$resq .= $q.",";
	}
	$port = 'localhost';
	$user = 'root';
	$password = '';
	$dbname = 'CollegeDB';
	$conn = mysqli_connect($port, $user, $password, $dbname);

	if (!$conn) {
		die('Could not connect'. mysqli_error($conn));
	}
	echo "connected.";

	$query = "INSERT INTO ApplyForm (Id, Name, Email, ContactNo, DOB, Gender, Qualification, Address) values ('', '$name', '$email', '$contact', '$dob', '$gender', '$resq', '$address')";
	$retval = mysqli_query($conn, $query);

	if (!$retval) {
		die('Not inserted'.mysqli_error($conn));
	}
	echo "Inserted Succesfully";

 ?> 