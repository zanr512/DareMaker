<?php
include_once 'config/db_config.php'

start_session();

$id1 = $_SESSION["id"];
$id2 = $_GET["fid"];

$sql = "INSERT INTO friends (user1_id, user2_id)
VALUES ('$id1', '$id2')";

if ($conn->query($sql) === TRUE) {
    echo "Friend added!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: profile.php?user='$id1'");

?>