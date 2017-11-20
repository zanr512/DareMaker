 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="resc/title_white.png" style="width: 170px;" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="discovery.php">Discovery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <?php
              if(!isset($_SESSION['id'])){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Log in</a>
            </li>
            <?php
              }
              else{
            ?>
            <li class="nav-item">
              <a class="nav-link" href="user.php?id=<?php echo $_SESSION['id']; ?>"><?php echo $_SESSION["username"]; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="php/logout.php">Log out</a>
            </li>
            <?php
              }
            ?>
          </ul>
        </div>
      </div>
    </nav>