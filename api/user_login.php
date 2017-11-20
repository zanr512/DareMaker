<?php
//user login
include_once 'config/db_config.php';

$email = $_POST["email"];
$password = $_POST["password"];

//Check whether user data already exists in database
$query = sprintf("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 1) {
    //vse ok
    $user = mysqli_fetch_array($result);
    echo "true";
	exit;
	
}
else{
        //Vrni "napačen email/ime oz. geslo"
        echo "false_login";
		exit;

}
    mysqli_close($conn);
?>