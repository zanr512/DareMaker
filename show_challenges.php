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
                  //vse ok
                  $user = mysqli_fetch_array($res);
                  $by = $user["username"];
                } 
            ?>
                <div class="col-12" style="padding: 10px; border-bottom: solid #f1f1f1 1px;">
                  <div class="row">
                    <div class="col-3">
                      <img src="resc/pic.jpg" class="img-responsive" />
                    </div>
                    <div class="col-6">
                      <div class="media-body">
                        <h5 class="mt-0">By <a href="user.php?id=<?php echo $rid; ?>"><?php echo $by; ?></a>
                          <span style="font-size: 10px; font-weight: lighter;float: right;">
                          <?php $date = $row["date"];
                                $date = new DateTime($date);
                                $date = date_format($date, 'd/m/Y g:i A'); 
                                echo $date;
                          ?>
                          </span>
                        </h5>
                        <?php
                          echo $row["cha_text"];
                        ?>
                        <?php 
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
                          <div class="progress" style="background-color: white;">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100" style="width:70%; background-color: #fe9810;">
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="col-md-4 " style="text-align: center; padding: 0">
                          <a href="#"> 
                            <img src="resc/like.png" style="width: 25px;">
                          </a>
                        </div>
                        <div class="col-md-4" style="text-align: center;">
                          -12
                        </div>
                        <div class="col-md-4" style="text-align: center; padding: 0">
                          <a href="#"> 
                            <img src="resc/dislike.png" style="width: 25px;">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <?php } ?>