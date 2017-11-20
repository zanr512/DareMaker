<?php
  session_start();
  include_once 'php/get_dare.php';
  if(!$ok){
    header("Location: discovery.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="icon" href="resc/daremaker.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DareMaker - <?php echo $title?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="vendor/bootstrap/nav/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template 
    <link href="css/blog-post.css" rel="stylesheet">
    -->
    <style type="text/css">
      #points{
        background-color: #feb657;
        border-radius: 2px;
        padding: 5px;
        color: white;
        font-weight: bold;
        text-align: center;
      }
      .dropdown {
        position: relative;
        display: inline-block;
        font-size: 14px;
      }

      .dropdown > a, .dropdown > button {
        font-size: 14px;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 4px;
        display: inline-block;
        color: black;
        text-decoration: none;
      }

      .dropdown > a:before, .dropdown > button:before {
        position: absolute;
        right: 7px;
        top: 12px;
        content: ' ';
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 5px solid black;
      }

      .dropdown input[type=checkbox] {
        position: absolute;
        display: block;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        margin: 0px;
        opacity: 0;
      }

      .dropdown input[type=checkbox]:checked {
        position: fixed;
        z-index:+0;
        top: 0px; left: 0px; 
        right: 0px; bottom: 0px;
      }

      .dropdown ul {
        position: absolute;
        top: 18px;
        border: 1px solid #ccc;
        border-radius: 3px;
        left: 0px;
        list-style: none;
        padding: 4px 0px;
        display: none;
        background-color: white;
        box-shadow: 0 3px 6px rgba(0,0,0,.175);
      }

      .dropdown input[type=checkbox]:checked + ul {
        display: block;
      }

      .dropdown ul li {
        display: block;
        padding: 6px 20px;
        white-space: nowrap;
        min-width: 100px;
      }

      .dropdown ul li:hover {
        background-color: #F5F5F5;
        cursor: pointer;
      }

      .dropdown ul li a {
        text-decoration: none;
        display: block;
        color: black
      }

      .dropdown .divider {
        height: 1px;
        margin: 9px 0;
        overflow: hidden;
        background-color: #e5e5e5;
        font-size: 1px;
        padding: 0;
      }

    </style>

  </head>

  <body>

    <!-- Navigation -->
   <?php
   include_once 'nav.php';
   ?>

    <!-- Page Content -->
    <div class="container" style="margin-top: 50px;">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <div class="row">
            <div class="col-9">
              <h1 class="mt-4" style="margin-bottom: 0;"><?php echo $title; ?></h1>
            </div>
            <div class="col-3">
               <h1 class="mt-4" style="margin-bottom: 0; font-size: 20px; text-align: right; ">[<?php echo $count; ?>]<a style="text-decoration: none;" href="php/like.php?id=<?php echo $dare_id; ?>">
                <?php if($liked == "true"){ ?>
                <img src="resc/liked.png" style="width: 25px;">
                <?php } else{ ?>
                <img src="resc/like.png" style="width: 25px;">
                <?php } ?>
              </a></h1>
            </div>
          </div>

          <!-- Author -->
          <p class="lead">
            by
            <a href="user.php?id=<?php echo $by_id; ?>"><?php echo $by ?></a>
          </p>

          <hr>

          <!-- Date/Time -->
          <div class="row">
            <div class="col-8 col-md-9">Posted on <?php echo $date ?></div>
            <div class="col-4 col-md-3"><div id="points"><?php echo $score ?> points</div></div>
          </div>
          <hr>

          <!--

            <div class="col-md-4">Posted on <?php echo $date ?></div>
            <div class="col-md-3 offset-md-5"><div id="points"><?php echo $score ?> points</div></div>
          -->

          <!-- Preview Image 
          <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
          <hr>
          -->

          <!-- Post Content -->
          <div class="lead" style="white-space: pre-line;"><?php echo $desc; ?></div>

          <hr>
          <div class="row">
            <div class="col-4">
              <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">FRESH
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">FRESH</a></li>
                  <li><a href="#">TOP</a></li>
                </ul>
              </div>
            </div>
            <div class="col-4 offset-4">
              <button type="submit" style="float: right;" class="btn btn-primary">CHALLANGE IT!</button>
            </div>
          </div>
          <hr>
          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form action="php/add_comment.php?did=<?php echo $dare_id; ?>" method="Post" id="comment">
                <div class="form-group">
                  <textarea class="form-control" name="text" rows="3" form="comment" required="required"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>

          <!-- Single Comment -->
          <?php include_once 'show_comments.php'; ?>

          </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Other</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
