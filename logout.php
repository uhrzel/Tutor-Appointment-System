<?php 

	session_start();

    include("./connection.php");

	if($_GET['type'] == 'p'){
		$sql = "INSERT INTO patient_logs(email, logs) VALUES ('".$_GET['email']."', 'logged out')";
		$database->query($sql);
	}elseif($_GET['type'] == 'd'){
		$sql = "INSERT INTO doctor_logs(email, logs) VALUES ('".$_GET['email']."', 'logged out')";
		$database->query($sql);
	}

	$_SESSION = array();

	if (isset($_COOKIE[session_name()])) {
		setcookie(session_name(), '', time()-86400, '/');
	}

	session_destroy();

	// redirecting the user to the login page
	header('Location: login.php?action=logout');

 ?>