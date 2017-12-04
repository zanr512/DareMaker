<?php

$rown = 0;
$query = sprintf("SELECT * FROM users ORDER BY score DESC LIMIT 10");
$result = mysqli_query($conn, $query);
while($row = $result->fetch_assoc()){
    $rown++;
    if($rown==1){
        ?><li class="list-group-item" style="background-color: #fe9810"><?php echo $rown.". ".$row["username"]; ?><span class="badge"><?php echo $row["score"]; ?></span></li><?php
    }
    else if($rown==2){
        ?><li class="list-group-item" style="background-color: #fea227"><?php echo $rown.". ".$row["username"]; ?><span class="badge"><?php echo $row["score"]; ?></span></li><?php
    }
    else if($rown==3){
        ?><li class="list-group-item" style="background-color: #feac3f"><?php echo $rown.". ".$row["username"]; ?><span class="badge"><?php echo $row["score"]; ?></span></li><?php
    }
    else{
        ?><li class="list-group-item"><?php echo $rown.". ".$row["username"]; ?><span class="badge"><?php echo $row["score"]; ?></span></li><?php
    }
}
?>