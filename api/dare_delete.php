<?php

	include_once 'config/db_config.php'

	$dare_id = $_POST["dare_id"];
	
	$sql = "DELETE FROM dares WHERE id='$dare_id'";

	if ($conn->query($sql) === TRUE) {
    	echo "Record deleted successfully";
	} else {
    	echo "Error deleting record: " . $conn->error;
	}

	$conn->close();
	header("Location: index.php");
?>