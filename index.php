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

    <!---JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
      $( document ).ready(function(){
        $('.tabs a').click(function () {
          $('li.tabs').removeClass('active');

          $(this).closest('li.tabs').addClass('active');
        });
      });
    </script>


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
          <ul  class="nav nav-pills top">
            <li class="tabs active" style="width: 24%;">
              <a  href="#1a" data-toggle="tab">TOP<br>DARES</a>
            </li>
            <li style="width: 24%;" class="tabs">
              <a href="#2a" data-toggle="tab">NEW<br>DARES</a>
            </li>
            <li style="width: 24%;" class="tabs">
              <a href="#3a" data-toggle="tab">TOP<br>CHALLANGES</a>
            </li>
            <li style="width: 24%;" class="tabs">
              <a href="#4a" data-toggle="tab">NEW<br>CHALLANGES</a>
            </li>
          </ul>

            <div class="tab-content clearfix">
              <div class="tab-pane active" id="1a">
                <?php
                  include_once "show_best_dares.php";
                ?>
              </div>
              <div class="tab-pane" id="2a">
                <?php
                  include_once "show_new_dares.php";
                ?>
              </div>
              <div class="tab-pane" id="3a">
                <?php
                  include_once "show_best_chall.php";
                ?>
              </div>
                <div class="tab-pane" id="4a">
                <?php
                  include_once "show_new_chall.php";
                ?>
              </div>
            </div>
        </div>
        <div class="col-md-4">
          <ul class="list-group">
            <br>
            <b style="padding: 10px; color: #f16000; text-decoration: underline;">THE BRAVEST OF THEM ALL</b>
            <?php
              include_once "show_best_users.php";
            ?> 
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
