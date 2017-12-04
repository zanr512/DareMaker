<?php
                        $query = sprintf("SELECT * FROM friends WHERE user1_id = '$user_id'");
                        $result = mysqli_query($conn, $query);
                        
                        if (mysqli_num_rows($result) == 0) {
                          echo "<h3>User doesn't follow anybody yet!</h3>";
                        }
                    ?>
                    <br>
                    <div class="row">
                      
                        <?php
                        while($row = $result->fetch_assoc()){
                          $cid = $row["id"];
                          if($user_id == $row["user1_id"]){
                            $rid = $row["user2_id"];
                          }
                          else{
                            $rid = $row["user1_id"];
                          }
                          $by = "test";
                          $que = sprintf("SELECT * FROM users WHERE id = ".$rid);
                          $res = mysqli_query($conn, $que);
                          if (mysqli_num_rows($res) == 1) {
                            //vse ok
                            $user = mysqli_fetch_array($res);
                            $by = $user["username"];
                            $pic = $user["picture"];
                            $fscore = $user["score"];
                          } 
                      ?>
                      <div class="col-6 col-md-4">
                        <div class="row" style="margin: -10px; border: #ffe3be solid 1px; border-radius: 3px;">
                          <div class="col-4" style="padding: 0;">
                            <img src="img/<?php echo $pic?>" class="img-responsive" />
                          </div>
                          <div class="col-8" style="padding: 10px;">
                            <div class="media-body">
                              <table>
                                <tr>
                                  <td>
                                    <h5><a href="user.php?id=<?php echo $rid; ?>"><?php echo $by; ?></a>
                                    </h5>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="color: black;">
                                    Points: <?php echo $fscore; ?>
                                  </td>
                                </tr>
                                <?php if($uid == $user_id){ ?>
                                <tr>
                                  <td>
                                    <a href="#" style="font-size: 10px;">UNFOLLOW</a>
                                  </td>
                                </tr>
                                <?php } ?>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php } ?>
                    </div>