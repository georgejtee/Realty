<!doctype html>
<html class="no-js" lang="zxx">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Realty Crowd - Peer to Peer Property Funding</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.ico') ?>">


  <!-- CSS here -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/slicknav.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/fontawesome-all.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/themify-icons.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/flaticon.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/slick.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/nice-select.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.22/af-2.3.5/b-1.6.5/r-2.2.6/datatables.min.css"/>

  <script src="<?= base_url('assets/js/vendor/jquery-1.12.4.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/vendor/modernizr-3.5.0.min.js') ?>"></script>
  <!-- Jquery, Popper, Bootstrap -->
  <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
  <!-- Jquery Mobile Menu -->
  <script src="<?= base_url('assets/js/jquery.slicknav.min.js') ?>"></script>

  <!-- Jquery Slick , Owl-Carousel Plugins -->
  <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/slick.min.js') ?>"></script>

  <!-- One Page, Animated-HeadLin -->
  <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/animated.headline.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.magnific-popup.js') ?>"></script>

  <!-- Scrollup, nice-select, sticky -->
  <script src="<?= base_url('assets/js/jquery.scrollUp.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.nice-select.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.sticky.js') ?>"></script>

  <!-- counter , waypoint -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="<?= base_url('assets/js/jquery.counterup.min.js') ?>"></script>

  <!-- counter -->
  <script src="<?= base_url('assets/js/contact.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.form.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.validate.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/mail-script.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.ajaxchimp.min.js') ?>"></script>

  <!-- Jquery Plugins, main Jquery -->
  <script src="<?= base_url('assets/js/plugins.js') ?>"></script>
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.22/af-2.3.5/b-1.6.5/r-2.2.6/datatables.min.js"></script>
</head>


<body>
  <header>
    <!-- Header Start -->
    <div class="header-area header-sticky">
      <div class="container-fluid">
        <div class="row align-items-center">
          <!-- Logo -->
          <div class="col-xl-2 col-lg-1 col-md-1">
            <div class="logo">
              <a href="index.html"><img src="<?= base_url('assets/img/logo/logo.png')?>" style="width:150px;" alt="Realty Crowd Peer to Peer Property Funding"></a>
            </div>
          </div>
          <div class="col-xl-7 col-lg-8 col-md-6">
            <!-- Main-menu -->
            <div class="main-menu f-right d-none d-lg-block">
              <nav>
               <ul id="navigation">
                 <?php if (!session()->get('id')): ?>


                 <li><a href="#">Invest</a>
                  <ul class="submenu">
                    <li><a href="contact.html">Peer to Peer Lending</a></li>
                    <li><a href="elements.html">Property Development Investment</a></li>
                    <li><a href="case_details.html">THC Fusion Account</a></li>
                    <li><a href="case_details.html">Innovative Finance ISA</a></li>
                    <li><a href="case_details.html">SIPP Investment</a></li>
                    <li><a href="case_details.html">Other Investment</a></li>
                  </ul>
                </li>

                <li><a href="#">Learn More</a>
                  <ul class="submenu">
                    <li><a href="contact.html">How it Works</a></li>
                    <li><a href="elements.html">How to Invest</a></li>
                    <li><a href="case_details.html">Case Studies</a></li>
                    <li><a href="contact.html">Customer Reviews</a></li>
                    <li><a href="elements.html">Testimonials</a></li>
                    <li><a href="case_details.html">FAQs</a></li>
                    <li><a href="contact.html">Video Library</a></li>
                    <li><a href="elements.html">Podcast</a></li>
                    <li><a href="case_details.html">Risk Warning</a></li>
                    <li><a href="case_details.html">Perfomance Stats</a></li>
                  </ul>
                </li>

                <li><a href="#">Borrow</a>
                  <ul class="submenu">
                    <li><a href="contact.html">Bridging Loans</a></li>
                    <li><a href="elements.html">Property Development Investing</a></li>
                    <li><a href="case_details.html">Become and Introducer</a></li>
                  </ul>
                </li>

                <li><a href="#">About Us</a>
                  <ul class="submenu">
                    <li><a href="contact.html">Work With Us</a></li>
                    <li><a href="elements.html">Meet The Team</a></li>
                    <li><a href="case_details.html">In The Press</a></li>
                    <li><a href="case_details.html">Code of Conduct</a></li>
                  </ul>
                </li>

                <li><a href="#">Contact Us</a>
                </li>
              <?php endif; ?>

              <?php if (session()->get('id')): ?>
              <li><a href="#">Properties</a>
                <ul class="submenu">
                  <li><a href="<?php echo (base_url('Property/addProperty')); ?>">Add Property</a></li>
                  <li><a href="<?php echo (base_url('Property/index')); ?>">Property List</a></li>
                  <li><a href="<?php echo(base_url('Property/createdProperties')) ?>">Created Properties</a></li>
                </ul>
              </li>

              <li><a href="#">User</a>
                <ul class="submenu">
                  <li><a href="<?php echo(base_url('User/addFunds')) ?>">Add Funds</a></li>
                  <li><a href="<?php echo(base_url('User/depositHistory')) ?>">Deposit History</a></li>
                  <li><a href="<?php echo(base_url('Property/userProperties')) ?>">Invested Properties</a></li>
                  <li><a href="<?php echo(base_url('User/profile')) ?>">Profile</a></li>

                </ul>
              </li>


              <li><a href="#">Admin</a>
                <ul class="submenu">
                  <li><a href="<?php echo(base_url('Admin/users')); ?>">Users</a></li>
                  <li><a href="<?php echo(base_url('Admin/properties')) ?>">Properties</a></li>
                </ul>
              </li>
            <?php endif; ?>
          </ul>
        </nav>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3">
      <!-- Header-btn -->
      <?php if(session()->get('id')): ?>
      <div class="header-btn d-none d-lg-block f-right">
        <a href="<?php echo(base_url('User/logout')); ?>" class="btn header-btn">Log Out</a>
      </div>
    <?php endif; ?>

    <?php if (!session()->get('id')): ?>
    <div class="header-btn d-none d-lg-block f-right">
      <a href="<?php echo(base_url('User/login')); ?>" class="btn header-btn">Login</a>
    </div>
  <?php endif; ?>
</div>
<!-- Mobile Menu -->
<div class="col-12">
  <div class="mobile_menu d-block d-lg-none"></div>
</div>
</div>
</div>
</div>
<!-- Header End -->
</header>
<main>