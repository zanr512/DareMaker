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


    <title>DareMaker - Discovery</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="vendor/bootstrap/nav/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link href="css/list_view.css" rel="stylesheet">
    <script>
        $(document).ready(function(){
            $("#grid").click(function(event){
                event.preventDefault();
                $(".izziv").removeClass("list-group-item");
                $(".izziv").addClass("col-lg-4");
                
                $(".izziv").addClass("grid");
                $(".izziv").addClass("grid-item");
                $(".izziv").removeClass("list");
                
                $(".opis").hide();
                
                $("#glavna").removeClass("list-group");
                $("#glavna").addClass("row");
            });
            $("#list").click(function(event){
                event.preventDefault();
                $(".izziv").removeClass("col-lg-4");
                $(".izziv").addClass("list-group-item");
                
                $(".opis").show();
                $(".izziv").removeClass("grid-item");
                
                $(".izziv").addClass("list");
                $(".izziv").removeClass("#grid");
                
                $("#glavna").removeClass("row");
                $("#glavna").addClass("list-group");
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

      input[type=text] {
        width: 130px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: white;
        background-image: url('resc/searchicon.png');
        background-position: 10px 10px; 
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
        margin: 10px;
      }

      /* When the input field gets focus, change its width to 100% */
      input[type=text]:focus {
          width: 100%;
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
    <div class="container">
      <div class="col-4">
        <input type="text" name="search" placeholder="Search..">
      </div>
      <div class="col" style="margin-bottom:20px;">
          <button class="btn btn-lg" id="list">
            <i class="fa fa-list" aria-hidden="true">   LIST</i>
        </button>
        <button class="btn btn-lg"  id="grid">
            <i class="fa fa-th" aria-hidden="true">   GRID</i>
        </button>
      </div>

      <div class="list-group" id="glavna">

            <div class="list-group-item list-group-item-action izziv list" style="">
                  <div class="row">
                      <img class="img-fluid" src="http://placehold.it/300x200" alt="">
                      <div class="desc col">
                          <p class="display-4 title">Title</p>
                            <p class="lead opis">
                                 Lorem ipsum dolor sit amet, quo case utamur percipit eu, eum movet postulant adipiscing eu. Choro placerat sadipscing ut ius, cum viris sapientem conclusionemque an. Ridens civibus praesent id cum. Ex quo dicant euismod.
                             </p>
                             <p class="score display-4">
                                 <i class="fa fa-star" aria-hidden="true">  5000</i>
                             </p>
                      </div>
                  </div>
            </div>
            <div class="list-group-item list-group-item-action izziv list" style="">
                  <div class="row">
                      <img class="img-fluid" src="http://placehold.it/300x200" alt="">
                      <div class="desc col">
                          <p class="display-4 title">Title</p>
                            <p class="lead opis">
                                 Lorem ipsum dolor sit amet, quo case utamur percipit eu, eum movet postulant adipiscing eu. Choro placerat sadipscing ut ius, cum viris sapientem conclusionemque an. Ridens civibus praesent id cum. Ex quo dicant euismod.
                             </p>
                             <p class="score display-4">
                                 <i class="fa fa-star" aria-hidden="true">  5000</i>
                             </p>
                      </div>
                  </div>
            </div>
            <div class="list-group-item list-group-item-action izziv list" style="">
                  <div class="row">
                      <img class="img-fluid" src="http://placehold.it/300x200" alt="">
                      <div class="desc col">
                          <p class="display-4 title">Title</p>
                            <p class="lead opis">
                                 Lorem ipsum dolor sit amet, quo case utamur percipit eu, eum movet postulant adipiscing eu. Choro placerat sadipscing ut ius, cum viris sapientem conclusionemque an. Ridens civibus praesent id cum. Ex quo dicant euismod.
                             </p>
                             <p class="score display-4">
                                 <i class="fa fa-star" aria-hidden="true">  5000</i>
                             </p>
                      </div>
                  </div>
            </div>
            <div class="list-group-item list-group-item-action izziv list" style="">
                  <div class="row">
                      <img class="img-fluid" src="http://placehold.it/300x200" alt="">
                      <div class="desc col">
                          <p class="display-4 title">Title</p>
                            <p class="lead opis">
                                 Lorem ipsum dolor sit amet, quo case utamur percipit eu, eum movet postulant adipiscing eu. Choro placerat sadipscing ut ius, cum viris sapientem conclusionemque an. Ridens civibus praesent id cum. Ex quo dicant euismod.
                             </p>
                             <p class="score display-4">
                                 <i class="fa fa-star" aria-hidden="true">  5000</i>
                             </p>
                      </div>
                  </div>
            </div>
            <div class="list-group-item list-group-item-action izziv list" style="">
                  <div class="row">
                      <img class="img-fluid" src="http://placehold.it/300x200" alt="">
                      <div class="desc col">
                          <p class="display-4 title">Title</p>
                            <p class="lead opis">
                                 Lorem ipsum dolor sit amet, quo case utamur percipit eu, eum movet postulant adipiscing eu. Choro placerat sadipscing ut ius, cum viris sapientem conclusionemque an. Ridens civibus praesent id cum. Ex quo dicant euismod.
                             </p>
                             <p class="score display-4">
                                 <i class="fa fa-star" aria-hidden="true">  5000</i>
                             </p>
                      </div>
                  </div>
            </div>
            <div class="list-group-item list-group-item-action izziv list" style="">
                  <div class="row">
                      <img class="img-fluid" src="http://placehold.it/300x200" alt="">
                      <div class="desc col">
                          <p class="display-4 title">Title</p>
                            <p class="lead opis">
                                 Lorem ipsum dolor sit amet, quo case utamur percipit eu, eum movet postulant adipiscing eu. Choro placerat sadipscing ut ius, cum viris sapientem conclusionemque an. Ridens civibus praesent id cum. Ex quo dicant euismod.
                             </p>
                             <p class="score display-4">
                                 <i class="fa fa-star" aria-hidden="true">  5000</i>
                             </p>
                      </div>
                  </div>
            </div>
            <div class="list-group-item list-group-item-action izziv list" style="">
                  <div class="row">
                      <img class="img-fluid" src="http://placehold.it/300x200" alt="">
                      <div class="desc col">
                          <p class="display-4 title">Title</p>
                            <p class="lead opis">
                                 Lorem ipsum dolor sit amet, quo case utamur percipit eu, eum movet postulant adipiscing eu. Choro placerat sadipscing ut ius, cum viris sapientem conclusionemque an. Ridens civibus praesent id cum. Ex quo dicant euismod.
                             </p>
                             <p class="score display-4">
                                 <i class="fa fa-star" aria-hidden="true">  5000</i>
                             </p>
                      </div>
                  </div>
            </div>
            <div class="list-group-item list-group-item-action izziv list" style="">
                  <div class="row">
                      <img class="img-fluid" src="http://placehold.it/300x200" alt="">
                      <div class="desc col">
                          <p class="display-4 title">Title</p>
                            <p class="lead opis">
                                 Lorem ipsum dolor sit amet, quo case utamur percipit eu, eum movet postulant adipiscing eu. Choro placerat sadipscing ut ius, cum viris sapientem conclusionemque an. Ridens civibus praesent id cum. Ex quo dicant euismod.
                             </p>
                             <p class="score display-4">
                                 <i class="fa fa-star" aria-hidden="true">  5000</i>
                             </p>
                      </div>
                  </div>
            </div>
            <div class="list-group-item list-group-item-action izziv list" style="">
                  <div class="row">
                      <img class="img-fluid" src="http://placehold.it/300x200" alt="">
                      <div class="desc col">
                          <p class="display-4 title">Title</p>
                            <p class="lead opis">
                                 Lorem ipsum dolor sit amet, quo case utamur percipit eu, eum movet postulant adipiscing eu. Choro placerat sadipscing ut ius, cum viris sapientem conclusionemque an. Ridens civibus praesent id cum. Ex quo dicant euismod.
                             </p>
                             <p class="score display-4">
                                 <i class="fa fa-star" aria-hidden="true">  5000</i>
                             </p>
                      </div>
                  </div>
            </div>
            
            
        </div>
      </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark" style="margin-top:30px;">
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
