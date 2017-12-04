<?php
  session_start();
  include_once 'php/get_user.php';
  if(!$ok){
    header("Location: discovery.php");
  }

?>
<!DOCTYPE html>
<html>

  <head>
    <link rel="icon" href="resc/daremaker.png">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DareMaker - <?php echo $username?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="vendor/bootstrap/nav/bootstrap.min.css" rel="stylesheet">

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
        color : #feac3f;
        border: solid 1px #feac3f;
        /* background-color: #feac3f; */
        min-height: 100px;
      }


      /* remove border radius for the tab */

      #exTab1 .nav-pills > li > a {
        border-radius: 0;
      }

      .nav-pills li{
        font-weight: bold;
      }

      .bars{
        font-weight: bold;
        text-align: center;
        padding: 5px;
        font-size: 16px;
        text-decoration: none;
      }
      .bars a{
        text-decoration: none;
      }
      .bars:hover{
        background-color: #eeeeee;
      }
      .bars.active{
        background-color: #fe9810;
      }
      .bars.active:hover{
        background-color: #fe9810;
      }
      .bars.active a{
        color: white;
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
              <h1 class="mt-4" style="margin-bottom: 0;">
              <?php if($user_id == $uid){ ?>
                <td>
                  <a href="#"><img src="resc/edit.png" style="width: 20px;"></a>
                </td>
              <?php } ?>
              <?php echo $username; ?>
            </h1>
            </div>
              <?php if(!$friends && $user_id != $uid && isset($_SESSION["id"])){ ?>
                <div class="col-3">
                  <h1 class="mt-4" style="margin-bottom: 0; font-size: 20px; text-align: right; ">
                    <a href="php/add_friend.php?fid=<?php echo $user_id; ?>">
                      <img src="resc/add_friend.png" alt="add_friend" style="width: 30px;">
                    </a>
                  </h1>
                </div>
              <?php } ?>
          </div>

          <!-- Author -->
          <p class="lead">
           
          </p>

          <hr>

          <!-- Date/Time -->
          <div class="row">
            <div class="col-8 col-md-9">Dareful since <?php echo $date ?></div>
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
          <div class="lead">
            <div class="row">
              <div class="col-4 col-md-2" style="margin: auto; margin-bottom: 10px;">
                <?php if($user_id == $uid){ ?>
                <div id="points" style="position: absolute; z-index: 1">
                  <a href="#"><img src="resc/edit.png" style="width: 20px;"></a>
                </div>
                <?php } ?>
                <img src="img/<?php echo $picture; ?>" class="img-responsive">
              </div>
              <div class="col-12 col-md-10">
                <table class="table table-striped">
                  <tr>
                    <td>
                      <b>First name:</b>
                    </td>
                    <td>
                      <?php echo $f_name; ?>
                    </td>
                    <?php if($user_id == $uid){ ?>
                      <td>
                        <a href="#"><img src="resc/edit.png" style="width: 20px;"></a>
                      </td>
                    <?php } ?>
                  </tr>
                  <tr>
                    <td>
                      <b>Last name:</b>
                    </td>
                    <td>
                      <?php echo $l_name; ?>
                    </td>
                    <?php if($user_id == $uid){ ?>
                      <td>
                        <a href="#"><img src="resc/edit.png" style="width: 20px;"></a>
                      </td>
                    <?php } ?>
                  </tr>
                  <tr>
                    <td>
                      <b>Gender:</b>
                    </td>
                    <td>
                      <?php echo $gender; ?>
                    </td>
                    <?php if($user_id == $uid){ ?>
                      <td>
                        <a href="#"><img src="resc/edit.png" style="width: 20px;"></a>
                      </td>
                    <?php } ?>
                  </tr>
                  <tr>
                    <td>
                      <b>Email:</b>
                    </td>
                    <td>
                      <?php echo $email; ?>
                    </td>
                    <?php if($user_id == $uid){ ?>
                      <td>
                        <a href="#"><img src="resc/edit.png" style="width: 20px;"></a>
                      </td>
                    <?php } ?>
                  </tr>
                </table>

                <!--
                <div>
                  <b style="width: 100px">First name:</b>  <?php echo $f_name; ?>
                </div>
                <div>
                  <b style="width: 100px">Last name:</b>  <?php echo $l_name; ?>
                </div>
                <div>
                  <b style="width: 100px">Email:</b>  <?php echo $email; ?>
                </div>
              -->
              </div>
            </div>
            <hr>
            <div class="col-12" id="exTab1" style="padding: 0">
              <ul  class="nav nav-pills">
                <li class="tabs active" style="width: 33%;">
                  <a  href="#1a" data-toggle="tab">FOLLOWING</a>
                </li>
                <li style="width: 33%;" class="tabs"><a href="#3a" data-toggle="tab">DARES</a>
                </li>
                <li style="width: 32%;" class="tabs"><a href="#4a" data-toggle="tab">CHALLENGES</a>
                </li>
              </ul>
              <!--
                <div  class="row" style="margin: 0;">
                  <div class="col-md-4 bars active">
                    <a  href="#1a" data-toggle="tab">FOLLOWING</a>
                  </div>
                  <div class="col-md-4 bars"><a href="#3a" data-toggle="tab">DARES</a>
                  </div>
                  <div class="col-md-4 bars"><a href="#4a" data-toggle="tab">CHALLENGES</a>
                  </div>
                </div>

            -->
                <div class="tab-content clearfix">
                  <div class="tab-pane active" style="padding: 5px 15px" id="1a">
                    <?php
                      include_once "user_follow.php";                      
                    ?>
                  </div>
                  <div class="tab-pane"  id="3a">
                    <?php
                      include_once "user_dares.php";
                    ?>
                  </div>
                  <div class="tab-pane" id="4a">
                    <?php
                      include_once "user_chall.php";
                    ?>
                  </div>
                </div>
            </div>
          </div>
          <br>
          <hr>
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
              <?php
                include_once "similar_users.php";
              ?>
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
