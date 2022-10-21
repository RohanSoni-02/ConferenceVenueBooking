<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="description" content="Assignment3"  />
<meta name="keywords" content="PHP, MySql" />
<link href="styles/style.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles/responsive.css" media="screen and (max-width: 568px)" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>Receipt of the order</title>
</head>
<body>
  <?php
  $page = "payment_page";
  include_once ("header.inc");
   ?>
  <h1>Receipt of Order</h1>
  <?php

    //Not accessed directly through URL
    session_start();
    if (isset($_SESSION["db_msg"])) {
      $db_msg = $_SESSION["db_msg"];
    }
    if (!isset($_SESSION["db_msg"])) {
      header("location: enquire.php");
      exit();
    }
    else {

      echo $db_msg;
    }
   ?>
   <br><br><br><br><br><br><br><br><br><br>
   <?php include_once ("footer.inc");
   ?>
</body>
</html>
