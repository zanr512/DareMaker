<?php

include_once 'config/db_config.php';


session_start();

if(!isset($_SESSION["id"])){
    $_SESSION["last_dare"]=$_GET["id"];
    header("Location: ../login.php");
    exit;
}

$dare_id = $_GET["did"];
$uid = $_SESSION["id"];

if(!isset($_POST["link"])){
	$link = "";
}
else{
	$link = $_POST["link"];
}

$file = "false";
if(!empty($_FILES["fileToUpload"]["name"])){
	$target_dir = "../uploads/";
	$file_link = $target_dir .$uid.'_'. basename($_FILES["fileToUpload"]["name"]);
	$file_name = $uid.'_'.$_FILES["fileToUpload"]["name"];
	$file = "true";
}

if(!isset($_POST["comm"])){
	$text = "";
}
else{
	$text = $_POST["comm"];
}
$query = sprintf("SELECT * FROM dare_users WHERE dare_id = '$dare_id' AND user_id = '$uid'");

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 0) {
    //vse ok

    if($file == "true"){
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file_link)) {

		    mysqli_query($conn,"INSERT INTO dare_users (user_id, dare_id,completed,link,cha_text) 
		        VALUES ('$uid','$dare_id',0,'$file_name','$text')");
		    mysqli_query($conn,"UPDATE dares SET count = count + 1 WHERE id = '$dare_id'");

	    } else {
	        echo "Sorry, there was an error uploading your file. #".$_FILES["fileToUpload"]["error"];
	        die();
	    }
	}
	else{
		
		mysqli_query($conn,"INSERT INTO dare_users (user_id, dare_id,completed,link,cha_text) 
		        VALUES ('$uid','$dare_id',0,'$link','$text')");
		mysqli_query($conn,"UPDATE dares SET count = count + 1 WHERE id = '$dare_id'");
	}


	$red = 'Location: ../dare.php?id='.$dare_id;
    header($red);
}
else{
    $red = 'Location: ../dare.php?id='.$dare_id.'&error=exists';
    header($red);
}

?>