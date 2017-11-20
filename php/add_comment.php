<?php
include_once 'config/db_config.php';

session_start();

if(!isset($_SESSION["id"])){
    $_SESSION["last_dare"]=$_GET["id"];
	header("Location: ../login.php");
}

$uid = $_SESSION["id"];
$dare_id = $_GET["did"];

$text = $_POST["text"];

$sql = "INSERT INTO comments (user_id, dare_id,comm_txt)
VALUES ('$uid', '$dare_id','$text')";

if ($conn->query($sql) === TRUE) {
	$red = 'Location: ../dare.php?id='.$dare_id ;
	header($red);
	exit;
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
	header('Location: ../dare.php?id=$dare_id&comm=error');
	exit;
}

?>