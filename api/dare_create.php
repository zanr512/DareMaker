<?php
	//database ---> [dare_user] dare_complete (bool)
	include_once 'config/db_config.php'

	$title = $_POST["title"];
	$desc = $_POST["desc"];

	$type = $_POST["type"];
	$points = $_POST["points"];

	//potrebuješ bit višji user rank
	if($type == "group"){
		/*
		if(isset($_POST["money"])){
			$money = $_POST["money"];
		}
		*/
		mysqli_query($conn,"INSERT INTO dares (name,description,score,target_id,Dare_type_id) 
		VALUES ('$title','$desc','$points',-1,2)");
	}
	//moraš imeti dovolj točk, da lahka izzoveš prijatelja
	else if($type = "target"){
		$target_id = $_POST["target_id"];

		mysqli_query($conn,"INSERT INTO dares (name,description,score,target_id,Dare_type_id) 
		VALUES ('$title','$desc','$points','$target_id',1)");

	}
	//sodelujejo lahko vsi
	else if($type = "promo"){
		mysqli_query($conn,"INSERT INTO dares (name,description,score,target_id,Dare_type_id) 
		VALUES ('$title','$desc','$points',-1,3)");
	}

	mysqli_close($conn);
	header("Location: index.php");
?>