<div class="row">
  <?php
  $query = sprintf("SELECT * FROM dares ORDER BY RAND() LIMIT 3");
  $result = mysqli_query($conn, $query);
  while($row = $result->fetch_assoc()){
    $title = $row["name"];
    $type = $row["dare_type_id"];
    $score = $row["count"];
    ?>
    <div class="col-6 col-md-12">
      <div class="row" style="width: 300px; margin: auto;">
        <div class="col-4" style="padding: 0;">
          <img src="resc/pic.jpg" class="img-responsive" />
        </div>
        <div class="col-8" style="padding: 10px;">
          <div class="media-body">
            <table>
              <tr>
                <td>
                  <h5><a href="user.php?id=<?php echo $rid; ?>"><?php echo $title; ?></a>
                  </h5>
                </td>
              </tr>
              <tr>
                <td style="color: black;">
                  Points: <?php echo $score; ?>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <br>
    </div>
    <?php } ?>
  </div>