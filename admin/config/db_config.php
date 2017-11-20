<?php
include_once "db.php";
$conn = mysqli_connect($servername, $username, $password,$db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>