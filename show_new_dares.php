<div class="row" style="padding: 0 15px">
	<?php
	include_once 'php/config/db_config.php';
	?>
	<table class="table table-striped">
    <tbody>
    	<?php
		$rown2 = 0;
		$query2 = sprintf("SELECT * FROM dares ORDER BY id DESC LIMIT 10");
		$result2 = mysqli_query($conn, $query2);
		while($row2 = $result2->fetch_assoc()){ 
			$rown2++;
			$did = $row2["id"];
			$title = $row2["name"];
			$desc = $row2["description"];
			$desc = substr($desc,0,60).'...';
			$likes = sprintf("SELECT * FROM dare_rate WHERE dare_id = '$did'");
			$likes_result = mysqli_query($conn, $likes);
			$count = mysqli_num_rows($likes_result);
		?>
	      <tr>
	        <td style="text-align: left;"><?php echo $rown2.". "; ?><a href="dare.php?id=<?php echo $did; ?>" style="color: white; font-weight: bold;"><?php echo $title; ?></a></td>
	        <td style="text-align: left;"><?php echo $desc; ?></td>
	        <td><?php echo $count; ?><img src="resc/like.png" style="width: 20px;"></td>
	      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>