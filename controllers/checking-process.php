<?php
	$fname = $_POST['fname'];
	$birthMonth = $_POST['birthMonth'];
	$birthDay = $_POST['birthDay'];
	session_start();

	if(strlen($fname)===0 || strlen($birthDay)===0){
		$_SESSION['errorMsg'] = "Please fill out all fields!";

		header("Location: " . $_SERVER['HTTP_REFERER']);
	}else{
		$_SESSION["fname"] = $fname;
		$_SESSION["birthMonth"] = $birthMonth;
		$_SESSION["birthDay"] = $birthDay;

		header("Location: ../views/landing-page.php");
	}

?>