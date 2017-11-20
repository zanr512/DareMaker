<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="icon" href="resc/daremaker.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DareMaker</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="vendor/bootstrap/nav/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">


    <style type="text/css">
      .badge{
        background-color: gray;
        border-radius: 2px;
        padding: 2px;
        color: white;
        float: right;
      }
      .list-group-item{
        text-align: left;
      }


      #exTab1 .tab-content {
        color : white;
        background-color: #feac3f;
        padding : 5px 15px;
        height: 360px;
      }


      /* remove border radius for the tab */

      #exTab1 .nav-pills > li > a {
        border-radius: 0;
      }

      .nav-pills li{
        font-weight: bold;
      }

      /* change border radius for the tab , apply corners on top*/

    </style>

  </head>

  <body>

    <!-- Navigation -->
   <?php
   include_once 'nav.php';
   ?>

    <!-- Page Content -->
    <div class="container" style="margin-bottom: 20px;">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4" style="padding: 0">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="resc/banner_1.jpg" style="width: 100%" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="resc/banner_1.jpg" style="width: 100%" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block img-fluid" src="resc/banner_1.jpg" style="width: 100%" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
      </header>

      <!-- Page Features -->
      <div class="row text-center">
        <div class="col-md-8" id="exTab1">
          <ul  class="nav nav-pills">
            <li class="active" style="width: 24%;">
              <a  href="#1a" data-toggle="tab">TRENDING</a>
            </li>
            <li style="width: 24%;"><a href="#2a" data-toggle="tab">HOT</a>
            </li>
            <li style="width: 24%;"><a href="#3a" data-toggle="tab">RATED</a>
            </li>
            <li style="width: 24%;"><a href="#4a" data-toggle="tab">NEWEST</a>
            </li>
          </ul>

            <div class="tab-content clearfix">
              <div class="tab-pane active" id="1a">
                <h3>Content's background color is the same for the tab</h3>
              </div>
              <div class="tab-pane" id="2a">
                <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
              </div>
              <div class="tab-pane" id="3a">
                <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
              </div>
                <div class="tab-pane" id="4a">
                <h3>We use css to change the background color of the content to be equal to the tab</h3>
              </div>
            </div>
        </div>
        <div class="col-md-4">
          <ul class="list-group">
            <b style="padding: 10px; color: #f16000; text-decoration: underline;">THE BRAVEST OF THEM ALL</b>
            <li class="list-group-item" style="background-color: #fe9810">1. AlashTheAdmin <span class="badge">9000+</span></li>
            <li class="list-group-item" style="background-color: #fea227">2. Deleted <span class="badge">5</span></li> 
            <li class="list-group-item" style="background-color: #feac3f">3. Warnings <span class="badge">3</span></li>
            <li class="list-group-item">4. Deleted <span class="badge">5</span></li> 
            <li class="list-group-item">5. Warnings <span class="badge">3</span></li> 
            <li class="list-group-item">6. Deleted <span class="badge">5</span></li> 
            <li class="list-group-item">7. Warnings <span class="badge">3</span></li> 
            <li class="list-group-item">8. Deleted <span class="badge">5</span></li> 
            <li class="list-group-item">9. Warnings <span class="badge">3</span></li>
            <li class="list-group-item">10. Deleted <span class="badge">5</span></li>    
          </ul>
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
