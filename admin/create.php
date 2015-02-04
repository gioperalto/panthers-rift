<?php
	// FIRST LAYER AUTH
	include 'authenticate.php';
	// SECOND LAYER AUTH
	if(isset($_POST['adminEmail']) && isset($_POST['adminPassword'])) {
		$email 			= $_POST['adminEmail'];
		$pass 			= $_POST['adminPassword'];
	} else {
		header("Location: ./");
		die();
	}

	// CONNECT TO DB
	include '../config/db-con.php';

	// TEST FOR EMAIL
	$adminExists = "SELECT admin_id FROM admin WHERE admin_email='" . $email . "';";
	if($result = mysqli_query($conn,$adminExists)) {
		if(mysqli_num_rows($result) > 0) {
			header("Location: ./?exists");
			die();
		}
	}

	// QUERY TO INSERT DATA INCLUDING HASHED PASSWORD
	$createAdmin = "INSERT INTO admin (admin_email,admin_password) VALUES ('" . $email . "','" . hash('whirlpool',$pass) . "');";

	// EXEC QUERY
	mysqli_query($conn,$createAdmin);

	// CLOSE CONNECTION
	mysqli_close($conn);

	// REDIRECT
	header("Location: ./?created");
?>