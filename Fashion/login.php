<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from Login where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: shop.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Cheryl</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="css/stylelogin.css" rel="stylesheet">
          <style>
          .container2{
            width:40%;
            margin:-100px 0;
            font-family:Poppins,sans-serif;
            border-radius: 5px;
            position: relative;
        }

        /* Login */
        #div_login{
            border: 1px solid gray;
            border-radius: 5px;
            width: 470px;
            height: 270px;
            box-shadow: 0px 2px 2px 0px gray;
            margin: 10px auto;

        }

        #div_login h1{
            margin-top: 0px;
            font-weight: normal;
            padding: 10px;
            background-color: #000;
            text-align: center;
            color: white;
            font-family: sans-serif;
            border-radius: 5px;
        }

        #div_login div{
            clear: both;
            margin-top: 10px;
            padding: 5px;
            border-radius: 5px;

        }

        #div_login .textbox{
            width: 96%;
            padding: 7px;
            border-radius: 5px;
        }

        #div_login input[type=submit]{
            padding: 7px;
            width: 100px;
            background-color: #000;
            border: 0px;
            color: white;
            border-radius: 5px;
        }
        </style>
</head>

<body id="body">
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="index.html" class="scrollto">Cheryl</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.html">Home</a></li>
          <li class="menu-active"><a href="shop_before.php">Shop</a></li>
          <button type="button" style="font-size:17px; margin-top:10px;margin-left:20px;font-family: Poppins,sans-serif; font-weight:400; width:100px;"class="btn btn-dark" onclick="window.location='login.php'"> Login</button>
      </nav>
    </div>
  </header>
</body>
<section id="intro">

  <div class="intro-content">
    <h2>Hello there!</h2>
      <div class="container2">
          <form method="post" action="">
              <div id="div_login">
                  <h1>Login</h1>
                  <div>
                      <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                  </div>
                  <div>
                      <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
                  </div>
                  <div>
                      <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                  </div>
              </div>
          </form>
    </div>
  </div>

  <div id="intro-carousel" class="owl-carousel" >
    <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
  </div>

</section>



  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Cheryl</strong>. All Rights Reserved.
      </div>
    </div>
  </footer>
  <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size:17px; margin-top:10px;margin-left:20px;font-family: Poppins,sans-serif; font-weight:400;">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="show-cart table">

          </table>
          <div>Total price: $<span class="total-cart"></span></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="clear-cart btn btn-danger">Clear Cart</button>
          <button type="button" class="btn btn-primary" style="background-color:#000; border:none;">Order Now</button>
        </div>
      </div>
    </div>
  </div>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>


</html>
