
<!-- Start a session -->
<?php session_start(); ?>

<!DOCTYPE HTML>

<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
    <link href="stylesheets/global/navbarStyle.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/global/footerStyle.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/global/globalStyle.css" rel="stylesheet" type="text/css">
    <link href="stylesheets/homeStyle.css" rel="stylesheet" type="text/css">
    <title>Team 7052</title>
    <?php $_SESSION['currentTitle'] = "Home"; ?>
  </head>
  <body>
    <div class="home-page">
      <div class="home-main-container">
        <!-- Create main background blurred image -->
        <div class="home-main-background-image"></div>
        <!-- Create navigation bar -->
        <?php include("templateFiles/navbar.php"); ?>

        <!-- Content that is in the home page, when user first loads screen -->
        <div id="home-main-title">Falcotronix</div>
        <p id="home-main-subtitle">Team 7052 is a competitive robotics team from St. Ignatius High School and provides opportunities for all students to experience real world engineering through robotics.</p>
        <p id="home-main-location">Located in Thunder Bay, Ontario</p>
      </div>

      <!-- About page screen -->
      <div class="home-subsection" id="home-about-section">
        <h1>About Us</h1>
        <p>Falcotronix is a high school robotics team from St. Ignatius. We are part of FIRST Robotics, a world-wide high school robotics competition. Our mission is to promote STEM (Science, Technology, Engineering and Math) education in a team environment across Northwestern Ontario.</p>
        <a class="underlined-link" href="about/about.php">Read More</a>
        <div id="home-about-image"></div>
      </div>

      <!-- Outreach page screen Hide outreach section temporarily --> 
      <!--<div class="home-subsection" id="home-outreach-section">
        <h1>Outreach</h1>
        <p>We are always looking to impact as many people in STEM education as possible. Yearly, we go onto countless community outreach events. This summer, we are running the first ever Falcotronix Summer Camp where students from grades 5 - 8 will learn how to build small robots from scratch.</p>
        <a class="underlined-link" href="#">Read More</a>
        <div id="home-outreach-image"></div>
      </div>-->

      <div class="home-subsection" id="home-media-section">
        <div id="home-media-background-image"></div>
        <div id="home-media-row">
          <h1>Media</h1>
          <img id="facebookLogo" src="public/images/socialMediaLogos/facebook.png">
          <img id="instagramLogo" src="public/images/socialMediaLogos/instagram.png">
          <img id="youtubeLogo" src="public/images/socialMediaLogos/youtube.png">
          <a id="galleryLink" href="media/media.php" class="custom-underlined-link">Gallery</a>
        </div>
      </div>

      <div class="home-subsection" id="home-sponsors-section">
        <h1>Sponsors</h1>
        <div id="home-sponsor-images-container">
          <img class="home-sponsor-image" id="home-sponsor-image1" src="public/images/lakehead.png">
          <img class="home-sponsor-image" id="home-sponsor-image2" src="public/images/concollege.png">
        </div>
        <a href="sponsors/sponsors.php" class="underlined-link">See all</a>
      </div>
    </div>
  </body>
  <?php include("templateFiles/footer.html"); ?>
</html>
