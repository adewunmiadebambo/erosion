<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Contact | Softech Communications Plus Limited </title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="icon" href="assets/images/favicon.png"/>
    
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark stroke">
        <!-- <h1> -->
          <!-- <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png"/></a> -->
            <!-- <span class="fa fa-align-right"></span>Softtech <span class="logo">...to satisfy your desires</span></a> -->
        <!-- </h1> -->
  
         <!-- if logo is image enable this    -->
          <a class="navbar-brand" href="index.php">
              <img src="assets/images/logo.png"  />
          </a>
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-lg-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @@about__active">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item @@services__active">
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item @@services__active">
              <a class="nav-link" href="project.php">Projects</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
          </div>
        

    </div>
  </header>
  <!--/header-->

<!-- Contact breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <h2 class="title pt-md-5 pt-4">Contact Us</h2>
        
        </div>
        <div class="hero-overlay"></div>
    </div>
</section>
<!-- //Contact breadcrumb -->

<section class="w3l-contact-main py-5" id="contact">
    <div class="container pt-lg-5 pt-md-3">
        <div class="title-content text-center mb-md-5 mb-4">
            <h3 class="title-big mx-lg-5">We are a full-service company</h3>
           
        </div>
        <div class="w3l-contact-info">
            <div class="row contact-infos">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-infos">
                        <div class="icon-box"> <span class="fa fa-map-o"></span></div>
                        <div class="text-box">
                            <h3 class="mb-2">Our Location</h3>
                            <p>1, Adelabu Street, Masha, Surulere, Lagos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="single-contact-infos">
                        <div class="icon-box"> <span class="fa fa-mobile"></span></div>
                        <div class="text-box">
                            <h3 class="mb-2">Give us a call</h3>
                            <p><a href="tel:+234 809-8545-791">+234 809-8545-791</a></p>
                            <p><a href="tel:+234 809-8545-791">+234 809-8545-791</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="single-contact-infos">
                        <div class="icon-box"> <span class="fa fa-envelope-o"></span></div>
                        <div class="text-box">
                            <h3 class="mb-2">Help Desk</h3>
                            <p> <a href="mailto:dareluky2k@yahoo.com">dareluky2k@yahoo.com</a></p>
                            <p> <a href="mailto:info@softechcommplusltd">info@softechcommplusltd.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- contact map -->
<section class="w3l-contact-main" id="contact">
    <div class="container">
        <div class="map pt-lg-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.1459607056886!2d3.3472865174438575!3d6.503199999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8c17b94c997f%3A0x7815a24807441845!2sMasha%20Bus%20Stop!5e0!3m2!1sen!2sng!4v1630584556442!5m2!1sen!2sng" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>
<!-- //contact map -->
<!-- contact-form -->
<section class="w3l-contact-main" id="contact">
  <div class="contact-infhny py-5">
    <div class="container py-lg-3">
      <div class="top-map">
        <div class="map-content-9">
          <form action="proc-contact.php" method="post">
          <?php if($msg)
            {
              echo '<div class="text-success"><i class="fa fa-check"></i> '.$msg.'</div>';
            }
            ?>
            <div class="form-top1">
              <h3 class="title-big text-center mb-2">Let’s talk about your project</h3>
              <p class="mb-lg-5 mb-4 text-center">We have made it easy for clients to reach us and get their solutions
                weaved</p>
              <div class="form-top">
                <div class="form-top-left">
                  <input type="text" name="name" id="w3lName" placeholder="Name" required="">
                  <input type="number" name="phone" placeholder="Your phone number" required="">
                  <input type="email" name="email" id="w3lSender" placeholder="Email*" required="">
                  <input type="text" name="subject" id="w3lName" placeholder="Subject" required="">
                </div>
                <div class="form-top-righ">
                  <textarea name="message" id="w3lMessage" placeholder="Message*" required=""></textarea>
                </div>
              </div>
              <div class="text-lg-right text-center">
                <button type="submit" class="btn btn-style btn-primary">Submit Now</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //contact-form -->
<!-- footer -->
<?php include ("footer.php") ; ?>
  
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        &#10548;
      </button>
      <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
          scrollFunction()
        };
  
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
          } else {
            document.getElementById("movetop").style.display = "none";
          }
        }
  
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
      </script>
      <!-- /move top -->
    </section>
    <!-- //copyright -->
  </footer>
  <!-- //footer -->
  
  
  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  
  <!-- libhtbox -->
  <script src="assets/js/lightbox-plus-jquery.min.js"></script>
  <!-- libhtbox -->
  
  <!-- banner slick slider -->
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/script.js"></script>
  <!-- //banner slick slider -->
  
  <!-- magnific popup -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
  
        fixedContentPos: false,
        fixedBgPos: true,
  
        overflowY: 'auto',
  
        closeBtnInside: true,
        preloader: false,
  
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });
  
      $('.popup-with-move-anim').magnificPopup({
        type: 'inline',
  
        fixedContentPos: false,
        fixedBgPos: true,
  
        overflowY: 'auto',
  
        closeBtnInside: true,
        preloader: false,
  
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-slide-bottom'
      });
    });
  </script>
  <!-- //magnific popup -->
  
  <!-- script for tesimonials carousel slider -->
  <script src="assets/js/owl.carousel.js"></script>
  
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          768: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false,
            loop: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->
  
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();
  
      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });
  
    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->
  
  <!-- Search -->
  <script>
    $('.control').click(function () {
      $('body').addClass('search-active');
      $('.input-search').focus();
    });
  
    $('.icon-close').click(function () {
      $('body').removeClass('search-active');
    });
  </script>
  <!-- //Search -->
  
  <script src="assets/js/bootstrap.min.js"></script>
  
  
  </body>
  
  </html>