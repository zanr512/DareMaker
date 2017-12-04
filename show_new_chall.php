<div class="row" style="padding: 0 15px">
	<?php
	include_once 'php/config/db_config.php';
	?>
	<table class="table table-striped">
    <tbody>
    	<?php
		$rown3 = 0;
		$query3 = sprintf("SELECT * FROM dare_users ORDER BY id DESC LIMIT 10");
		$result3 = mysqli_query($conn, $query3);
		while($row3 = $result3->fetch_assoc()){ 
			$rown3++;
			$did = $row3["dare_id"];
			$link = $row3["link"];
			$desc = $row3["cha_text"];
			$desc = substr($desc,0,40).'...';
			$count = $row3["score"];

			    $query = sprintf("SELECT * FROM dares WHERE id = '$did'");
				$result = mysqli_query($conn, $query);
				if (mysqli_num_rows($result) == 1) {
				    $user = mysqli_fetch_array($result);
				    $title = $user["name"];	
				} 
		?>
	      <tr>
	        <td style="text-align: left;"><?php echo $rown3.". "; ?><a href="dare.php?id=<?php echo $did; ?>" style="color: white; font-weight: bold;"><?php echo $title; ?></a></td>
	        <td style="text-align: left;"><?php echo $desc; ?></td>
	        <td><a href="#" style="color: white;">[VIEW]</a></td>
	        <td><?php echo $count; ?><img src="resc/like.png" style="width: 20px;"></td>
	      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>