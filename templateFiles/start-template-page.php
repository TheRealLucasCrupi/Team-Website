<body>
  <div class="page">
    <div class="page-main-container">
      <!-- Create background blurred image -->
      <div class="page-background-image" id="outreach-background-image"></div>
      <?php include("navbar.php"); ?>
      <script type="text/javascript">
        // set current nav section color (but skip for now until full dropdown menu is created)
        /*var navBarElements = document.getElementsByClassName('navbar-element');
        console.log(navBarElements);
        for (i = 0; i < navBarElements.length; i++) {
          if (navBarElements[i].innerHTML == "<?php echo $currentTitle; ?>") {
            navBarElements[i].className = "navbar-element navbar-element-current navbar-dropdown-section";
          }
          navBarElements[i].className = "navbar-element navbar-dropdown-section";
        }*/
      </script>
      <!-- Content that is in the about page, when user first loads screen -->
      <!-- Next two are global elements since they are used on every page -->
      <div class="page-title-section">
        <div class="page-main-title"><?php echo $currentTitle; ?></div>
        <p class="page-main-subtitle"><?php echo $currentSubSection; ?></p>
      </div>
      <!-- Renamed to sub-navbar since this will be a global element (used in every page) -->
      <div class="sub-navbar">
        <?php
          foreach($sectionSubsections as $subSection) {
            if (strcmp(strtolower($subSection), $currentSubSection) == 0) {
              echo "<div class='sub-navbar-element sub-navbar-element-selected' onclick='switchSubSection(this, \"$currentTitle\")'>$subSection</div>";
            }
            else {
              echo "<div class='sub-navbar-element' onclick='switchSubSection(this, \"$currentTitle\")'>$subSection</div>";
            }
          }
         ?>
      </div>
    </div>
    <div class="page-subsection">
      <!-- Load correct subsection from current section and subsection -->
      <?php
        include("../$currentTitle/$currentSubSection.php");
       ?>
