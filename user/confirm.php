<?php
	// AUTHENTICATE
	if(!isset($_GET['id']) || isset($_COOKIE['CONFIRM_ID'])) {
		header("Location: ../?confirmed");
		die();
	}

	// CONNECT TO DB
	include '../config/db-con.php';

	// CHECK IF USER ALREADY CONFIRMED
	$confirmed = "SELECT user_id FROM competitor WHERE user_id='" . $_GET['id'] . "';";
	if($result = mysqli_query($conn,$confirmed)) {
		if(mysqli_num_rows($result) > 0) {
			header("Location: ../?confirmed");
		}
	}

	// VAR TO DETERMINE SUB OR MAIN
	$is_sub = 'N';
	// CHECKS IF NUM REGISTRANTS IS AT LEAST 80
	if($result = mysqli_query($conn,"SELECT user_id FROM competitor;")) {
		if(mysqli_num_rows($result) >= 80) {
			$is_sub = 'Y';
		}
	}

	// INSERT STATEMENT
	$insert = "INSERT INTO competitor (user_id,is_sub) VALUES ('" . $_GET['id'] . "','" . $is_sub . "');";
	mysqli_query($conn,$insert);

	// CLOSE CONNECTION
	mysqli_close($conn);

	// SET CONFIRM_ID AS COOKIE
	setcookie('CONFIRM_ID',$_GET['id'],time() + (86400 * 30),"/");

	if($is_sub == 'N') {
		// REDIRECT TO MAIN
		header("Location: ../confirmed.php?main");
	} else {
		// REDIRECT TO SUB
		header("Location: ../confirmed.php?sub");
	}
?>