<?php

include_once 'config/db_config.php';

if(!isset($_SESSION["id"])){
	header('Location: ../login.php');
	exit;
}

	
$uid = $_SESSION["id"];

$query = sprintf("SELECT * FROM users WHERE id = '$uid'");
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 1) {
		    //vse ok
	$user = mysqli_fetch_array($result);
				
	if($user["usr_type_id"] != 1){
		header("Location: ../index.php");
	}
}
else{
		header("Location: ../index.php");
}
?>