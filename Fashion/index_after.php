<?php
include "config.php";
if(!isset($_SESSION['uname'])){
    header('Location:index.html');
}
?>
<html lang="en">
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
  <link href="css/style.css" rel="stylesheet">
  <style>
  .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 0px;
  font-size: 10px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fff;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 10;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
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
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#portfolio" class="btn-projects scrollto">Explore</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><div class="dropdown">
            <button type="button" style="font-size:17px; margin-top:10px;margin-left:20px;font-family: Poppins,sans-serif; font-weight:400; width:100px;" class="btn btn-dark"> <?php echo $_SESSION['uname']; ?></button>
            <div class="dropdown-content">
              <a href="index.html">Logout</a>
            </div>
          </div>
        </li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="intro">

    <div class="intro-content">
      <h2>Indulge in this amazing <br> clothing experience.</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">About!</a>
        <a href="#portfolio" class="btn-projects scrollto">Explore</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="img/abt-img.jpg" alt="">
          </div>
          <div class="col-lg-6 content">
            <h2 style="font-weight:bold;">Clothing that redefines fashion.</h2>
            <h3>With clothing hand-picked by our talented stylists who wish to bring diversity, fashion and comfort under one hood. That’s why we partner with the best, ethical factories around the world.
              Source only the finest materials.
              And share those stories with you—down to the true cost of every product we make.
              It’s a new way of doing things. We call it Radical Transparency.</h3>
            <h4 style="font-weight:bolder;">Here's our promise to you!</h4>
            <ul>
              <li><i class="ion-android-checkmark-circle" style="color:black"></i> Sustainability initiatives : Recyclable materials, organic cotton and more</li>
              <li><i class="ion-android-checkmark-circle" style="color:black"></i> Ethically made. Designed to last.</li>
              <li><i class="ion-android-checkmark-circle" style="color:black"></i> Radical Transparency</li>
            </ul>

          </div>
        </div>

      </div>
    </section>
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Features</h2>
          <p>We have been featured in over 5 International magazines and multiple local magazines. Their have been multiple endorsements made by International models and was featured as #2 on the Journal of International Brands of America.</p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
          <img src="img/clients/client-9.png" alt="">
          <img src="img/clients/client-10.png" alt="">
          <img src="img/clients/client-11.jpeg" alt="">
        </div>

      </div>
    </section>
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Explore</h2>
          <p>Check out our most-loved looks for the season!</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/1.jpg" class="portfolio-popup">
                <img src="img/portfolio/1.jpg" alt="">
                <div class="portfolio-overlay">
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/2.jpg" class="portfolio-popup">
                <img src="img/portfolio/2.jpg" alt="">
                <div class="portfolio-overlay">
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/3.jpg" class="portfolio-popup">
                <img src="img/portfolio/3.jpg" alt="">
                <div class="portfolio-overlay">
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/4.jpg" class="portfolio-popup">
                <img src="img/portfolio/4.jpg" alt="">
                <div class="portfolio-overlay">
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/5.jpg" class="portfolio-popup">
                <img src="img/portfolio/5.jpg" alt="">
                <div class="portfolio-overlay">
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/6.jpg" class="portfolio-popup">
                <img src="img/portfolio/6.jpg" alt="">
                <div class="portfolio-overlay">
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/7.jpg" class="portfolio-popup">
                <img src="img/portfolio/7.jpg" alt="">
                <div class="portfolio-overlay">
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/8.jpg" class="portfolio-popup">
                <img src="img/portfolio/8.jpg" alt="">
                <div class="portfolio-overlay">
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Founders</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-1.jpg" alt=""></div>
              <div class="details">
                <h4>Cheryl</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-2.jpg" alt=""></div>
              <div class="details">
                <h4>Shoubar</h4>
                <span>Director</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-3.jpg" alt=""></div>
              <div class="details">
                <h4>Pretsey</h4>
                <span>Designer</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-4.jpg" alt=""></div>
              <div class="details">
                <h4>Shirley</h4>
                <span>Designer</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>We'd love to hear from you!</h2>
          <p>If you're interested in Cheryl fashion, then let us know!</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline" style="color:#000;width:20%;"></i>
              <h3>Address</h3>
              <address>Electronic City, Bangalore</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline" style="color:#000;"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+919676319812">+91 9676319812</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline" style="color:#000;"></i>
              <h3>Email</h3>
              <p><a href="tejaswini@gmail.com">tejaswini@gmail.com</a></p>
            </div>
          </div>

        </div>
      </div>

      <!--div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div-->

      <div class="container">
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" data-rule="minlen:4" data-msg="Please enter at least 4 characters" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 characters" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Write a message!" placeholder="We'd love to hear from you!"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section>

  </main>

  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Cheryl</strong>. All Rights Reserved.
      </div>
    </div>
  </footer>

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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>

</body>
</html>
