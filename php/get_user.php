<?php

include_once 'config/db_config.php';
$user_id = $_GET["id"];
$uid = $_SESSION["id"];
$f_name = "/";
$l_name = "/";
$ok = true;
$friends = false;
$liked = "false";
$query = sprintf("SELECT * FROM users WHERE id = '$user_id'");
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 1) {
    //vse ok
    $user = mysqli_fetch_array($result);
    $username = $user["username"];
    $f_name = $user["first_name"]; 
    $l_name = $user["last_name"]; 
    $gender = $user["gender"]; 
    $email = $user["email"]; 
    $picture = $user["picture"];
    $score = $user["score"];


    $query1 = sprintf("SELECT * FROM friends WHERE (user1_id = '$user_id' AND user2_id = '$uid') OR (user2_id = '$user_id' AND user1_id = '$uid')");
	$result1 = mysqli_query($conn, $query1);
	if (mysqli_num_rows($result1) == 1) {
	    //vse ok
        $friends = true;	
	} 
    
    $date = $user["created"];
    $date = new DateTime($date);
    $date = date_format($date, 'd/m/Y');
    /*
    $query1 = sprintf("SELECT * FROM dare_rate WHERE dare_id = '$dare_id' AND user_id = '$uid'");
    $result1 = mysqli_query($conn, $query1);
    if (mysqli_num_rows($result1) == 1) {
        //vse ok
        $liked = "true";
    }

    $query2 = sprintf("SELECT * FROM dare_rate WHERE dare_id = '$dare_id'");
    $result2 = mysqli_query($conn, $query2);
    $count = mysqli_num_rows($result2);
    */
}
else{
	$ok = false;
}

?>