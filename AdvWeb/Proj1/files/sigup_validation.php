<?php 
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pw = $_POST['pw'];
	$cpw = $_POST['cpw'];
	$port = 'localhost';
	$user = 'root';
	$password = '';
	$dbname = 'CollegeDB';
	$conn = mysqli_connect($port, $user, $password, $dbname);

	if (!$conn) {
		die('connection Denied: '. mysqli_error($conn).'<br>');
	}
	echo "Connection Access <br>";	

	$signValid = "SELECT * FROM sign where Email = '$email' && Password = '$pw' && CnfmPW = '$cpw'";

	$retval = mysqli_query($conn, $signValid);

	$matchInRow = mysqli_num_rows($retval);

	if ($matchInRow == 1) {
		echo "email or password already exist, Enter Another Email and Password!";
	}
	else{
		$qy = "INSERT INTO sign(Id, Name, Email, Password, CnfmPW) values ('', '$name', '$email', '$pw', '$cpw' )";
		mysqli_query($conn, $qy);
	}

	mysqli_close($conn);
	header('location:signIn.php')

 ?>	