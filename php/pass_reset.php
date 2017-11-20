<?php
	include_once 'config/db_config.php';
	$email = $_POST['email'];
	$query = sprintf("SELECT * FROM users WHERE email = '%s' ORDER BY id ASC LIMIT 1", mysqli_real_escape_string($link,$email));
	$result = $link->query($query) or die($link->error.__LINE__);
					
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) 
		{ 
			$dejanski_email = $row['email'];
			$user_id = $row['id'];

			$novogeslo = uniqid();
			$pass = $salt.$novogeslo;
			$coded_pass = sha1($pass);

			$query = sprintf("UPDATE users SET password = '%s' WHERE id = '%s'", 
				mysqli_real_escape_string($link,$coded_pass),
				mysqli_real_escape_string($link,$user_id));
			$result = $link->query($query) or die($link->error.__LINE__);

			$to = $dejanski_email;
			$subject = "Password reset - Daremaker";
			$txt = "Your new password for Daremaker account is: " . " " . $novogeslo . " " . "Please reset your password once you're loged in...";
			$headers = "From: admin@doge.si";
								
			mail($to,$subject,$txt,$headers);

			echo "success";
			exit();

	}}
	else
	{
		echo "false";
	    exit();
	}

?>