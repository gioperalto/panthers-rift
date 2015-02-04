<?php
	// AUTHENTICATION
	if(isset($_POST['adminEmail']) && isset($_POST['adminPassword'])) {
		$email 			= $_POST['adminEmail'];
		$pass 			= $_POST['adminPassword'];
	} else {
		// REDIRECT USER
		header("Location: ../?invalid");
		die();
	}

	// CONNECT TO DB
	include '../config/db-con.php';

	// QUERY TO FIND DATA
	$findAdmin = "SELECT admin_id FROM admin WHERE admin_email='" . $email . "' AND admin_password='" . hash('whirlpool',$pass) . "';";
	if($result = mysqli_query($conn,$findAdmin)) {
		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				session_start();
				$_SESSION['ADMIN_ID'] = $row['admin_id'];
			}
		}
	}

	// CLOSE CONNECTION
	mysqli_close($conn);

	// REDIRECT
	header("Location: ./");
?>