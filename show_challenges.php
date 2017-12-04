<?php 
  $query = sprintf("SELECT * FROM dare_users WHERE dare_id = '$dare_id' LIMIT 3");
  $result = mysqli_query($conn, $query);
 while($row = $result->fetch_assoc()){
  $cid = $row["id"];
  $rid = $row["user_id"];
  $by = "test";
  $que = sprintf("SELECT * FROM users WHERE id = ".$rid);
  $res = mysqli_query($conn, $que);
  if (mysqli_num_rows($res) == 1) {
    $user = mysqli_fetch_array($res);
    $by = $user["username"];
  }?>
  <div class="col-12" style="padding: 10px; border-bottom: solid #f1f1f1 1px;">
    <div class="row">
      <div class="col-3">
        <img src="resc/pic.jpg" class="img-responsive" />
      </div>
      <div class="col-6">
        <div class="media-body">
          <h5 class="mt-0">By <a href="user.php?id=<?php echo $rid; ?>"><?php echo $by; ?></a>
            <span style="font-size: 10px; font-weight: lighter;float: right;">
              <?php 
                $date = $row["date"];
                $date = new DateTime($date);
                $date = date_format($date, 'd/m/Y g:i A'); 
                echo $date;
              ?>
            </span>
          </h5>
          <?php
            echo $row["cha_text"];
            if($rid == $_SESSION["id"]){
          ?>
            <br>
            <a href="php/delete_chall.php?dare=<?php echo $dare_id;?>&id=<?php echo $cid;?>" style="font-size: 10px;">DELETE</a>
          <?php
            }
          ?>
        </div>
      </div>
      <div class="col-3">
        <div class="row" style="margin-top: 20px;">
          <div class="col-12">
            <?php
            $que3 = sprintf("SELECT * FROM cha_rate WHERE id_dare_users = ".$cid);
            $upvotes = 0;
            $rows = 0;
            $percent = 0;
            $result3 = mysqli_query($conn, $que3);
            while($row3 = $result3->fetch_assoc()){
              $upvotes = $upvotes + $row3["upvote"];
              $rows++;
            } 
            if($rows!=0){
              $percent = round(($upvotes/$rows)*50);
            }
            $percent = 50 + $percent;
            ?>
            <div class="progress" style="background-color: white;">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $percent;?>"
                aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percent;?>%; background-color: #fe9810;">
              </div>
            </div>
          </div>
          <br>
          <?php 
          if(isset($_SESSION["id"])){
            ?>
            <div class="col-md-4 " style="text-align: center; padding: 0">
              <?php
              $quer5 = sprintf("SELECT * FROM cha_rate WHERE  id_dare_users = '$cid' AND user_id = '$uid' AND upvote = 1");
              $result5 = mysqli_query($conn, $quer5);
              if (mysqli_num_rows($result5) != 1) {
                ?>
                <a href="php/cha_up.php?id=<?php echo $cid; ?>&did=<?php echo $dare_id; ?>" >
                  <img src="resc/like.png" style="width: 25px;">
                </a>
                <?php }else{ ?>
                <img src="resc/liked.png" style="width: 25px;">
                <?php } ?>
              </div>
              <div class="col-md-4" style="text-align: center;">
                <?php echo $upvotes; ?>
              </div>
              <div class="col-md-4" style="text-align: center; padding: 0">
                <?php
                $quer6 = sprintf("SELECT * FROM cha_rate WHERE  id_dare_users = '$cid' AND user_id = '$uid' AND upvote = -1");
                $result6 = mysqli_query($conn, $quer6);
                if (mysqli_num_rows($result6) != 1) {
                  ?>
                  <a href="php/cha_down.php?id=<?php echo $cid; ?>&did=<?php echo $dare_id; ?>" >
                    <img src="resc/dislike.png" style="width: 25px;">
                  </a>
                  <?php }else{ ?>
                  <img src="resc/disliked.png" style="width: 25px;">
                  <?php } ?>
                </div>
                <?php }else{ ?>
                <div class="col-12 " style="text-align: center; padding: 0">
                  <?php echo $upvotes; ?>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>