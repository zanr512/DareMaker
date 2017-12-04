<div class="row" style="padding: 0 15px">
	<?php
	include_once 'php/config/db_config.php';
	?>
	<table class="table table-striped">
    <tbody>
    	<?php
		$rown1 = 0;
		$query1 = sprintf("SELECT * FROM dares ORDER BY count DESC LIMIT 10");
		$result1 = mysqli_query($conn, $query1);
		while($row1 = $result1->fetch_assoc()){ 
			$rown1++;
			$did = $row1["id"];
			$title = $row1["name"];
			$desc = $row1["description"];
			$desc = substr($desc,0,60).'...';
			$likes = sprintf("SELECT * FROM dare_rate WHERE dare_id = '$did'");
			$likes_result = mysqli_query($conn, $likes);
			$count = mysqli_num_rows($likes_result);
		?>
	      <tr>
	        <td style="text-align: left;"><?php echo $rown1.". "; ?><a href="dare.php?id=<?php echo $did; ?>" style="color: white; font-weight: bold;"><?php echo $title; ?></a></td>
	        <td style="text-align: left;"><?php echo $desc; ?></td>
	        <td><?php echo $count; ?><img src="resc/like.png" style="width: 20px;"></td>
	      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>