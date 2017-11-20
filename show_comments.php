<?php
            $query = sprintf("SELECT * FROM comments WHERE dare_id ='$dare_id'");
            $result = mysqli_query($conn, $query);
            while($row = $result->fetch_assoc()){
              $cid = $row["id"];
              $rid = $row["user_id"];
              $by = "test";
              $img = "defalt.png";
              $que = sprintf("SELECT * FROM users WHERE id = ".$rid);
              $res = mysqli_query($conn, $que);
              if (mysqli_num_rows($res) == 1) {
                //vse ok
                $user = mysqli_fetch_array($res);
                $img = $user["picture"];
                $by = $user["username"];
              } 
              ?>
              <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="img/<?php echo $img; ?>" style="width: 50px; height: 50px;" alt="profile_image">       
                <div class="media-body">
                  <h5 class="mt-0">By <a href="user.php?id=<?php echo $rid; ?>"><?php echo $by; ?></a></h5>
                  <?php
                    echo $row["comm_txt"];
                  ?>
                  <?php 
                    if($rid == $_SESSION["id"]){
                      ?>
                        <br>
                        <a href="php/delete_comment.php?dare=<?php echo $dare_id;?>&id=<?php echo $cid;?>" style="font-size: 10px;">DELETE</a>
                      <?php
                    }
                  ?>
                </div>
              </div>
              <hr>
<?php } ?>