<?php
  session_start();
  if(isset($_SESSION["id"])){
    header("Location: index.php");
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


    <title>DareMaker - Discovery</title>

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
        background-color: #eb9950a1;
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

    </style>

  </head>

  <body>

    <!-- Navigation -->
   <?php
   include_once 'nav.php';
   ?>

    <!-- Page Content -->
    <div class="container">
      <div class="row" style="margin-bottom: 100px;">
         <div class="col-xs-12 col-md-4" style="margin: 20px auto; border: 1px solid #f16000; border-radius: 5px; padding: 10px;">
          <form method="post" action="php/user_login.php">
           <div class="form-group " style="padding: 10px;">
            <div class="col-xs-12" style="text-align: center;">
              <img src="resc/logo.png" style="width: 200px;">
            </div>
            <label class="control-label requiredField" style="margin-top: 10px;" for="name">
             Username or email
             <span class="asteriskField">
              *
             </span>
            </label>
            <input class="form-control" id="name" name="name" type="text" required="required" />
           </div>
           <div class="form-group " style="padding: 0 10px 10px 10px;">
            <label class="control-label requiredField" for="subject">
             Password
             <span class="asteriskField">
              *
             </span>
            </label>
            <input class="form-control" id="subject" name="password" type="password" required="required" />
           </div>
           <div class="form-group" style="padding: 10px;">
            <div>
              <a href="register.php">Don't have an account yet?</a><br />
              <a href="#">Forgotten password?</a><br /><br />
             <button class="btn btn-default" name="submit" type="submit" style="font-size: 14px; background-color: #f16000; color: white; font-weight: bold; float: right; ">
              Log in
             </button>
            </div>
           </div>
          </form>
         </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark" style="position: fixed; bottom: 0; width: 100%;">
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
