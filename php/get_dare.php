<?php

include_once 'config/db_config.php';
$dare_id = $_GET["id"];
$uid = $_SESSION["id"];
$ok = true;
$liked = "false";
$query = sprintf("SELECT * FROM dares WHERE id = '$dare_id'");
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 1) {
    //vse ok
    $dare = mysqli_fetch_array($result);
    $title = $dare["name"];
    $desc = $dare["description"]; 
    $score = $dare["score"]; 
    $by_id = $dare["user_id"];
    $count = 0;

    $query = sprintf("SELECT * FROM users WHERE id = '$by_id'");
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) == 1) {
	    //vse ok
	    $user = mysqli_fetch_array($result);
	    $by = $user["username"];	
	} 

    $date = $dare["created"];
    $date = new DateTime($date);
    $date = date_format($date, 'd/m/Y g:i A');

    $query1 = sprintf("SELECT * FROM dare_rate WHERE dare_id = '$dare_id' AND user_id = '$uid'");
    $result1 = mysqli_query($conn, $query1);
    if (mysqli_num_rows($result1) == 1) {
        //vse ok
        $liked = "true";
    }

    $query2 = sprintf("SELECT * FROM dare_rate WHERE dare_id = '$dare_id'");
    $result2 = mysqli_query($conn, $query2);
    $count = mysqli_num_rows($result2);
}
else{
	$ok = false;
}

?>