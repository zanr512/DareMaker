<?php
	//database ---> [dare_user] dare_complete (bool)
	include_once 'config/db_config.php'

	$dare_id = $_POST["dare_id"];

	$title = $_POST["title"];
	$desc = $_POST["desc"];

	$points = $_POST["points"];

	$sql = "UPDATE dares SET name=$title',description='$desc',points='$points' WHERE id='$dare_id'";

	if ($conn->query($sql) === TRUE) {
    	echo "Record updated successfully";
	} else {
    	echo "Error updating record: " . $conn->error;
	}

	mysqli_close($conn);
	header("Location: index.php");
?>