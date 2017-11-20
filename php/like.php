<?php

include_once 'config/db_config.php';

session_start();
if(!isset($_SESSION["id"])){
    $_SESSION["last_dare"]=$_GET["id"];
    header("Location: ../login.php");
    exit;
}

$dare_id = $_GET["id"];
$uid = $_SESSION["id"];
$query = sprintf("SELECT * FROM dare_rate WHERE dare_id = '$dare_id' AND user_id = '$uid'");
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 1) {
    //vse ok
    $like = mysqli_fetch_array($result);
    $lid = $like["id"];
    $sql = "DELETE FROM dare_rate WHERE id='$lid'";
    if ($conn->query($sql) === TRUE) {
        $red = 'Location: ../dare.php?id='.$dare_id ;
        header($red);
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
else{
    
    mysqli_query($conn,"INSERT INTO dare_rate (user_id, dare_id) 
        VALUES ('$uid','$dare_id')");

    $red = 'Location: ../dare.php?id='.$dare_id ;
    header($red);
}
?>