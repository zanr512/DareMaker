<?php
include_once 'config/db_config.php'

start_session();

$uid = $_SESSION["id"];
$dare_id = $_POST["dare_id"];

$text = $_POST["text"];

$sql = "INSERT INTO comments (user_id, dare_id,comm_txt)
VALUES ('$uid', '$dare_id','$text')";

if ($conn->query($sql) === TRUE) {
    echo "Comment added!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


header("Location: dare.php?id='$id1'");

?>