<?php

include_once 'config/db_config.php';
$did = $_GET["dare"];
$cid = $_GET["id"];

$sql = "DELETE FROM dare_users WHERE id='$cid'";
    if ($conn->query($sql) === TRUE) {    	
		mysqli_query($conn,"UPDATE dares SET count = count - 1 WHERE id = '$did'");
        $red = 'Location: ../dare.php?id='.$did;
        header($red);
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }

?>