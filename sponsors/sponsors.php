<?php session_start(); ?>

<!DOCTYPE HTML>
<html>
  <?php
    include("../phpScripts/functions.php");
    $_SESSION['currentTitle'] = "Sponsors";
    $_SESSION['sectionSubsections'] = array("Platinum", "Gold", "Silver", "Bronze");
    if (!stringIsInArray($_SESSION['currentSubsection'], $_SESSION['sectionSubsections'])) {
      $_SESSION['currentSubsection'] = $_SESSION['sectionSubsections'][0];
    }
    include("../templateFiles/header.php");
  ?>
  <?php include("../templateFiles/start-template-page.php"); ?>


  <?php include("../templateFiles/end-template-page.php") ?>
</html>
