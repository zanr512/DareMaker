<?php
//user login
include_once 'config/db_config.php';

$user = $_POST["name"];
$pass = $_POST["password"];

//Check whether user data already exists in database
$query = sprintf("SELECT * FROM users WHERE (email = '$user' OR username = '$user') AND password = '$pass'");
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 1) {
    //vse ok
    $user = mysqli_fetch_array($result);
    session_start();
    $_SESSION["id"] = $user["id"];
    $_SESSION["username"] = $user["username"]; 
    if(isset($_SESSION["last_dare"])){
        $did =  $_SESSION["last_dare"];
        $_SESSION["last_dare"] = NULL;
        header("Location: ../dare.php?id=".$did);
        exit;
    }
    header("Location: ../index.php");
	exit;
	
}
else{
        //Vrni "napačen email/ime oz. geslo"
    header("Location: ../login.php?error=true");
	exit;

}
    mysqli_close($conn);
?>