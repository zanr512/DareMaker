<?php

include_once 'config/db_config.php';
$did = $_GET["dare"];
$cid = $_GET["id"];

$sql = "DELETE FROM comments WHERE id='$cid'";
    if ($conn->query($sql) === TRUE) {
        $red = 'Location: ../dare.php?id='.$did;
        header($red);
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }

?>