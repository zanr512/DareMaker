<?php
include_once 'config/db_config.php';


session_start();

if(!isset($_SESSION["id"])){
    $_SESSION["last_dare"]=$_GET["id"];
    header("Location: ../login.php");
    exit;
}
?>