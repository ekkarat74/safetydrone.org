<?php
  include_once('../../php_header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pricing - SafetyDrone - Simplifying Drone Operations</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="SafetyDrone has plans for all levels, providing monthly, quarterly & annual billing, providing the best drone logbook feature set at the lowest price.">
  <meta name="author" content="SafetyDrone">

  <meta property="og:title" content="SafetyDrone">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://image.ibb.co/cVGLSo/og_img.png">
  <meta property="og:image:width" content="1200" />
  <meta property="og:url" content="https://www.safetydrone.org">
  <meta property="og:description" content="SafetyDrone has plans for all levels, providing monthly, quarterly & annual billing, providing the best drone logbook feature set at the lowest price.">
  <meta property="og:site_name" content="SafetyDrone">

  <meta name="twitter:widgets:csp" content="on">
  <meta name="twitter:url" content="https://www.safetydrone.org">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="SafetyDrone">
  <meta name="twitter:description" content="SafetyDrone has plans for all levels, providing monthly, quarterly & annual billing, providing the best drone logbook feature set at the lowest price.">
  <meta name="twitter:text:description" content="SafetyDrone has plans for all levels, providing monthly, quarterly & annual billing, providing the best drone logbook feature set at the lowest price.">
  <meta name="twitter:image" content="https://image.ibb.co/cVGLSo/og_img.png">
  <meta name="twitter:site" content="@dronelogbook">

  <link rel="shortcut icon" href="favicon.ico">

  <script src="/_static/lib/skel.min.js"></script>
  <script src="/_static/lib/skel-panels.min.js"></script>
  <link rel="stylesheet" href="/_static/lib/skel-noscript.css" />

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/navigation.min.css" />
  <link rel="stylesheet" href="css/general-style.min.css?v=20210105" />
  <link rel="stylesheet" href="css/robly.css">
  <link rel="stylesheet" href="/_static/css/bootstrap-modal.css?v=20210108">

  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/ionicons.min.css" />
  <link rel="stylesheet" href="css/themes/default/default.css" />

  <style>
    .modal {
      z-index: 10500000;
    }
  </style>
</head>

<body>

  <header>
    <div class="container-fluid">
      <div class="row">
        <a href="index.html" class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
          <img class="logo" src="img-min/logo/Logo-whiteText.png" alt="SafetyDrone Logo">
        </a>
        <nav id="nav-links">
          <a href="features.html" class="nav-link">Features</a>
          <a href="pricing.php" class="nav-link">Pricing</a>
          <a href="partners.html" class="nav-link">Partners</a>
          <a href="faq.html" class="nav-link">FAQ </a>
          <a href="contact.php" class="nav-link">Contact Us </a>
          <a href="/profile/login.php" class="nav-link signIn">Sign In</a>
        </nav>
        <div onclick="toggleMobileNav(this)" class="mobile-nav-container">
          <div class="mobile-nav"></div>
        </div>
      </div>
    </div>
    <div class="mobile-links">
      <nav id="mobile-nav-links">
        <a href="features.html" class="nav-link">Features</a>
        <a href="pricing.php" class="nav-link">Pricing</a>
        <a href="partners.html" class="nav-link">Partners</a>
        <a href="faq.html" class="nav-link">FAQ </a>
        <a href="contact.php" class="nav-link">Contact Us </a>
        <a href="/profile/login.php" class="nav-link btn">Sign In</a>
      </nav>
    </div>
  </header>

  <section class="laptop internal features">
    <div class="page-wrapper">
      <div class="content-container">
        <div class="column-left">
          <h1>One Plan - Priced For Public Budgets</h1>
          <h2 class="sub-header long">SafetyDrone was developed with the idea that 1st Responders and Emergency Management Professionals should
            be able to access all available features for one price. We understand that these are public budgets
            that need to be justified. As such we have priced our platform to allow for access to all interested
            users. At 60$ per user per year it is 75% less than our commercial plans. All we ask is you use your
            government email when registering. It's that simple. There is a free plan for those who wish to see how
            the basic site works prior to purchasing.</h2>
          <p style="color: #fff;"><b>2 Months Free Trial For All New Users</b></p>
        </div>
      </div>
    </div>
    <div class="colored-bg"></div>
  </section>

  <?php include_once ("../../payment/subscriptions.php");?>

  <section class="readytouse">
    <h2 class="content-header">Ready to use SafetyDrone?</h2>
    <p class="content-sub-header">Create a free account</p>
    <p class="content-sub-header"><b>2 Months Free Trial For All New Users</b></p>
    <div>
      <ul class="ui-buttons ui-footer">
        <li>
          <a href="pricing.php" class="ui-black">Get Started</a>
        </li>
        <li>
          <a href="features.html" class="ui-white">Learn More</a>
        </li>
      </ul>
    </div>
  </section>

  <section class="appstore wedo" style="padding-top: 20px">
    <div class="page-wrapper" style="justify-content: center; flex-wrap: wrap; align-items: flex-start;">
      <div class="content-header">SafetyDrone Mobile Apps</div>
      <div class="divider" style="margin-bottom: 20px;"></div>

      <div style="padding-left: 40px; padding-right: 10px; padding-top: 40px;">
        <p class="appstore__desc">The SafetyDrone solution is based on a cloud infrastructure with secure data storage, online web application
          accompanied by our mobile application for offline access and easy synchronization with your cloud based account.
          In addition, the mobile app provides you with access to the latest airspace status updates, local weather and
          solar index reading that might affect your operations.</p>
        <br />
        <p class="appstore__desc">Another Android mobile application, <b>DLBSync</b>, simplifies import of your flights from major mobile drone flight control apps natively to your SafetyDrone account. This app can sync flights into DLB Sync from your flight control apps when offline or in poor mobile coverage, then upload flights to SafetyDrone account when you have mobile or WIFI coverage.</p>
      </div>

      <div style="display: flex; padding-left: 20px; padding-right: 20px; align-items: flex-end;">
        <div style="">
          <a href="https://itunes.apple.com/us/app/safetydrone/id1450982145?mt=8" target="_blank" rel="noopener noreferrer" class="appstore__link-item appstore__link-item--itunes-lg">
            <img src="img-min/mobileApp3.png" alt="Download on the App Store" class="appstore__img img-responsive">
          </a>
        </div>

        <div style="margin-top: 40px; margin-bottom: 40px;">
          <a href="https://itunes.apple.com/us/app/safetydrone/id1450982145?mt=8" target="_blank" rel="noopener noreferrer" class="appstore__link-item appstore__link-item--top">
            <img src="img-min/download-app-apple.svg" alt="Download on the App Store" class="appstore__img img-responsive" style="width: 85%;">
          </a>
          <a href="https://play.google.com/store/apps/details?id=com.droneanalytics.safetydrone" target="_blank" rel="noopener noreferrer" class="appstore__link-item">
            <img src="img-min/download-app-android.svg" alt="Get It On Google Play" class="appstore__img img-responsive" style="width: 85%;">
          </a>
        </div>

        <a href="https://play.google.com/store/apps/details?id=com.dlbsync" target="_blank" rel="noopener noreferrer" class="appstore__link-item appstore__link-item--itunes-lg">
          <img src="img-min/mobileDlbsync.png" alt="Download on the App Store" class="appstore__img img-responsive">
        </a>
      </div>
    </div>
  </section>

  <footer class="footer">
    <ul class="footer-menu">
      <li class="footer-menu__item">SafetyDrone</li>
      <li class="footer-menu__item">
        <a href="terms.php" class="footer-menu__link">Terms of Service</a>
      </li>
      <li class="footer-menu__item">
        <a class="footer-menu__link" href="contact.php">Contacts</a>
      </li>
      <li class="footer-menu__item">
        <a href="http://www.twitter.com/SafetyDrone" target="_blank" rel="noopener noreferrer" class="icons__logo icons__logo--fa-twitter"></a>
      </li>
    </ul>
  </footer>

  <script type="text/javascript" src="/_static/lib/jquery-3.6.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

  <?php include_once ("../../payment/subscriptionsPopup.php");?>

</body>

</html>