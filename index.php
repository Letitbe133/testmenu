<?php
  require_once('config.php');
  include('libs/MobileDetect/Mobile_Detect.php');
  include('head.php');
  include('nav.php');

  $page = $_GET['page'];
  $detect = new Mobile_Detect;

  if ($detect->isMobile()) {
    echo "Mobile détecté";
  }

  if (isset($page)) {
    require_once("pages/".strtolower($page).".php");
  } else {
    header('location: index.php?page=accueil');
  }
  require_once('footer.php');
 ?>
