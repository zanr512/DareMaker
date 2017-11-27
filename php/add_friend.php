<?php
include_once 'config/db_config.php';

session_start();

$id1 = $_SESSION["id"];
$id2 = $_GET["fid"];

$sql = "INSERT INTO friends (user1_id, user2_id)
VALUES ('$id1', '$id2')";

if ($conn->query($sql) === TRUE) { 
	$red = 'Location: ../user.php?id='.$id2;
    header($red);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>