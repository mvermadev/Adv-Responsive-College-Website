<?php 
	
	session_start();

	$email = $_POST['email'];
	$pw = $_POST['pw'];
	$port = 'localhost';
	$user = 'root';
	$password = '';
	$dbname = 'CollegeDB';
	$conn = mysqli_connect($port, $user, $password, $dbname);

	if (!$conn) {
		die('connection Denied: '. mysqli_error($conn).'<br>');
	}
	echo "Connection Access <br>";	

	$signValid = "SELECT * FROM sign where Email = '$email' && Password = '$pw'";

	$retval = mysqli_query($conn, $signValid);

	$matchInRow = mysqli_num_rows($retval);

	if ($matchInRow == 1) {
		// $name = mysql_fetch_field(result)
		$name = "SELECT Name FROM sign where Email = '$email'";
		$resName = mysqli_query($conn, $name);	
		$rowName = mysqli_fetch_row($resName);
		$_SESSION['name'] = $rowName[0];
		header('location:../index.php');
		// echo $_SESSION['name'];
	}
	else{
		header('location:signIn.php');
	}

	mysqli_close($conn);

 ?>	