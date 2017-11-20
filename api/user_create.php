<?php

	include_once 'config/db_config.php';
	
	$username = $_POST["username"];
	$email = $_POST["email"];
	$gender = $_POST["gender"];
	$password = $_POST["password"];
	$name = $_POST["name"];
	$surname = $_POST["surname"];

	$picture = "users/default.png";
	
	$query = sprintf("SELECT * FROM users WHERE email = '$email'");
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
    	echo "error_emailexists";
		exit;
	}
	$query = sprintf("SELECT * FROM users WHERE username = '$username'");
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
    	echo "error_usernameexsits";
		exit;
	}

	mysqli_query($conn,"INSERT INTO users (username,first_name,last_name,gender,picture,password,usr_type_id,email) 
		VALUES ('$username','$name','$surname','$gender','$picture','$password',2,'$email')");

	mysqli_close($conn);
	echo "success";
	exit;
?>