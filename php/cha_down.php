<?php
include_once 'config/db_config.php';

session_start();
if(!isset($_SESSION["id"])){
    $_SESSION["last_dare"]=$_GET["id"];
    header("Location: ../login.php");
    exit;
}
$did = $_GET["did"];
$cid = $_GET["id"];
$uid = $_SESSION["id"];
$query = sprintf("SELECT * FROM cha_rate WHERE 	id_dare_users = '$cid' AND user_id = '$uid'");
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 1) {
    //vse ok
    $like = mysqli_fetch_array($result);
    $lid = $like["id"];
    $sql = "UPDATE cha_rate SET upvote = -1 WHERE id_dare_users = '$cid' AND user_id = '$uid'";
    if ($conn->query($sql) === TRUE) {
        mysqli_query($conn,"UPDATE dare_users SET score = score - 2 WHERE id = '$cid'");
        $red = 'Location: ../dare.php?id='.$did ;
        header($red);
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
else{
    
    mysqli_query($conn,"INSERT INTO cha_rate (id_dare_users, user_id,upvote) 
        VALUES ('$cid','$uid',-1)");
    mysqli_query($conn,"UPDATE dare_users SET score = score - 1 WHERE id = '$cid'");

    $red = 'Location: ../dare.php?id='.$did ;
    header($red);
}
?>