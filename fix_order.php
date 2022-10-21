<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Demonstrates assignment3" />
  <meta name="keywords"  content="PHP, error" />
  <meta name="author"  content="Rohan Soni" />
  <title>Payment</title>
  <link href="styles/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/responsive.css" media="screen and (max-width: 568px)" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
 <h1>Your input has errors. Kindly fix them!! </h1>
<?php
//Not accessed directly through URL
  if (!isset($_GET["errmsg"])) {
    header("location:enquire.php");
    exit();
  }
  echo "<div class='errors'>";
  echo $_GET["errmsg"];
  echo "</div>";


  //Get values from process_order.php

  session_start();
  if (isset($_SESSION["firstname"])) {
    $firstname = $_SESSION["firstname"];
  }
  if (isset($_SESSION["lastname"])) {
    $lastname = $_SESSION["lastname"];
  }
  if (isset($_SESSION["UserEmail"])) {
    $email = $_SESSION["UserEmail"];
  }
  if (isset($_SESSION["address"])) {
    $street = $_SESSION["address"];
  }
  if (isset($_SESSION["usrstate"])) {
    $state = $_SESSION["usrstate"];
  }
  if (isset($_SESSION["postcode"])) {
    $postcode = $_SESSION["postcode"];
  }
  if (isset($_SESSION["PrefContact"])) {
    $prefContact = $_SESSION["PrefContact"];
  }
  if (isset($_SESSION["PhoneNo"])) {
    $phone = $_SESSION["PhoneNo"];
  }
  if (isset($_SESSION["NoOfPeople"])) {
    $people = $_SESSION["NoOfPeople"];
  }
  if (isset($_SESSION["Style"])) {
    $style = $_SESSION["Style"];
  }
  if (isset($_SESSION["layout"])) {
    $layout = $_SESSION["layout"];
  }
  if (isset($_SESSION["Quantity"])) {
    $days = $_SESSION["Quantity"];
  }
  if (isset($_SESSION["cost"])) {
    $cost = $_SESSION["cost"];
  }
  if (isset($_SESSION["cctype"])) {
    $cardType = $_SESSION["cctype"];
  }
  if (isset($_SESSION["CardName"])) {
    $cardName = $_SESSION["CardName"];
  }
  if (isset($_SESSION["CardNumber"])) {
    $cardNo = $_SESSION["CardNumber"];
  }
  if (isset($_SESSION["CardExpiry"])) {
    $cardExp = $_SESSION["CardExpiry"];
  }
  if (isset($_SESSION["CardVerify"])) {
    $cardVerify = $_SESSION["CardVerify"];
  }

  $vic = (strpos($state,"VIC")!==false);
  $nsw = (strpos($state,"NSW")!==false);
  $qld = (strpos($state,"QLD")!==false);
  $nt = (strpos($state,"NT")!==false);
  $wa = (strpos($state,"WA")!==false);
  $sa = (strpos($state,"SA")!==false);
  $tas = (strpos($state,"TAS")!==false);
  $act = (strpos($state,"ACT")!==false);

  $trad = (strpos($style,"trad")!==false);
  $mod = (strpos($style,"mod")!==false);
  $cas = (strpos($style,"cas")!==false);
  $corp = (strpos($style,"corp")!==false);
  $spac = (strpos($style,"spac")!==false);
  $afford = (strpos($style,"afford")!==false);

  $banq = (strpos($layout,"banq")!==false);
  $boad = (strpos($layout,"boad")!==false);
  $stand = (strpos($layout,"stand")!==false);
  $theat = (strpos($layout,"theat")!==false);
  $ushape = (strpos($layout,"ushape")!==false);
  $pod = (strpos($layout,"pod")!==false);

 ?>
  <form id="AssgnFrm3" action="process_order.php" method="post" novalidate="novalidate">
    <fieldset>
      <legend>Your selection: </legend>
      <p>
        <label for="fname">First name: </label>
        <input type="text" name="firstname" id="fname" maxlength="25" required="required" value="<?php
        echo $firstname;
        ?>"/>
      </p>
      <p>
        <label for="lname">Last name: </label>
        <input type="text" name="lastname" id="lname" maxlength="25" required="required" value="<?php
        echo $lastname;
        ?>" />
      </p>
      <p>
        <label for="contemail">Email address: </label>
        <input type="email" id="UserEmail" name="UserEmail" placeholder="name@domain.com" required="required" value="<?php
        echo $email;
        ?>" />
      </p>
      <fieldset>
        <legend>Address</legend>
        <p>
          <label for="stadd">Street address:</label>
          <input type="text" name="address" id="stadd" maxlength="40" required="required" value="<?php
          echo $street;
          ?>" />
        </p>
        <p>
          <label for="state">State: </label>
          <select name="usrstate" id="usrstate" required="required" value="<?php echo $state; ?>">
            <option value="">Please select</option>
            <option value="VIC" <?php echo ($vic)?"selected":"";  ?> >VIC</option>
            <option value="NSW" <?php echo ($nsw)?"selected":"";  ?>>NSW</option>
            <option value="QLD" <?php echo ($qld)?"selected":"";  ?> >QLD</option>
            <option value="NT" <?php echo ($nt)?"selected":"";  ?>>NT</option>
            <option value="WA" <?php echo ($wa)?"selected":"";  ?> >WA</option>
            <option value="SA" <?php echo ($sa)?"selected":"";  ?> >SA</option>
            <option value="TAS" <?php echo ($tas)?"selected":"";  ?>>TAS</option>
            <option value="ACT" <?php echo ($act)?"selected":"";  ?>>ACT</option>
          </select>
        </p>
        <p>
          <label for="pcode">Postcode: </label>
          <input type="text" name="postcode" id="pcode" maxlength="4" required="required" value="<?php
          echo $postcode;
          ?>" />
        </p>
      </fieldset>
      <p>
        <label for="pno">Phone no: </label>
        <input type="text" id="pno" name="PhoneNo" placeholder="##########" required="required" value="<?php
        echo $phone;
        ?>" />
      </p>
      <p>
          <label>Preferred contact: </label>
          <br />
          <br />
          <label for="email">Email</label>
          <input type="radio" id="email" name="PrefContact" value="email" />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label for="post">post</label>
          <input type="radio" id="post" name="PrefContact" value="post" checked="checked"/>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label for="phone">Phone</label>
          <input type="radio" id="phone" name="PrefContact" value="phone" />
      </p>
      <fieldset>
        <legend>Event Details</legend>
        <p>
          <label for="nop">No of people: </label>
          <input type="number" name="NoOfPeople" id="nop" min="1" max="100" step="1" value="25" value="<?php
          echo $people;
          ?>"/>
        </p>
      </fieldset>
      <fieldset>
        <legend>Event Extras</legend>
        <p>
          <label for="style">Venue style: </label>
          <select name="Style" id="style" value="<?php
          echo $style;
          ?>">
            <option value="none">Any venue style</option>
            <option value="trad" <?php echo ($trad)?"selected":"";  ?>>Traditional</option>
            <option value="mod" <?php echo ($mod)?"selected":"";  ?>>Modern</option>
            <option value="cas" <?php echo ($cas)?"selected":"";  ?>>Casual</option>
            <option value="corp" <?php echo ($corp)?"selected":"";  ?>>Corporate</option>
            <option value="spac" <?php echo ($spac)?"selected":"";  ?>>Spacious</option>
            <option value="afford" <?php echo ($afford)?"selected":"";  ?>>Affordable</option>
          </select>


        </p>
        <p>
          <label for="layout">Venue layout: </label>
          <select name="layout" id="layout" value="<?php
          echo $layout;
          ?>">
            <option value="none">Any layout</option>
            <option value="banq" <?php echo ($banq)?"selected":"";  ?> >Banquet</option>
            <option value="boad" <?php echo ($boad)?"selected":"";  ?> >Boardroom</option>
            <option value="stand" <?php echo ($stand)?"selected":"";  ?> >Standing</option>
            <option value="theat" <?php echo ($theat)?"selected":"";  ?> >Theatre</option>
            <option value="ushape" <?php echo ($ushape)?"selected":"";  ?> >U-shaped</option>
            <option value="pod" <?php echo ($pod)?"selected":"";  ?> >Pod seating</option>
          </select>

        </p>
        <br />
        <p>
          What are your other requirements?
          <br />
          <br />
          <label for="AV">AV Suppport</label>
          <input type="checkbox" id="AV" name="Req[]" value="AVsupp" checked="checked" />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label for="Cater">Catering</label>
          <input type="checkbox" id="Cater" name="Req[]" value="Catering" />
          <br />
          <br />
          <label for="Boards">Whiteboards</label>
          <input type="checkbox" id="Boards" name="Req[]" value="Whiteboards" />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label for="Park">Parking</label>
          <input type="checkbox" id="Park" name="Req[]" value="Parking" />
          <br />
          <br />
          <label for="Break">Breakout rooms</label>
          <input type="checkbox" id="Break" name="Req[]" value="rooms" />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label for="TC">Tea and Coffee</label>
          <input type="checkbox" id="TC" name="Req[]" value="teacoff" />
          <br />
          <br />
          <br />
          <br />
          <label for="Quantity">No. of Days: </label>
          <input type="text" name="Quantity" id="Quantity" required="required" value="<?php
          echo $days;
          ?>" />
        </p>
      </fieldset>
    </fieldset>
      <fieldset>
      <legend>Credit Card Payment Details</legend>
      <p>
        <label for="cctype">Credit Card type: </label>
        <select name="cctype" id="cctype">
          <option value="none">Please select</option>
          <option value="Visa">Visa</option>
          <option value="Mastercard">Mastercard</option>
          <option value="AE">American Express</option>
        </select>
      </p>
      <p>
        <label for="ccName">Name: </label>
        <input type="text" name="CardName" id="ccName" maxlength="40" required="required"  />
      </p>
      <p>
        <label for="ccNum">Credit Card Number: </label>
        <input type="text" name="CardNumber" id="ccNum" required="required"  />
      </p>
      <p>
        <label for="ccExp">Credit Card Expiry date: </label>
        <input type="text" name="CardExpiry" id="ccExp" required="required"  placeholder="mm-yy" />
      </p>
      <p>
        <label for="ccCVV">Card Verification Value: </label>
        <input type="text" name="CardVerify" id="ccCVV" maxlength="3" required="required"  />
      </p>
    </fieldset>
    <div class="link">
          <input type="submit" name="Submit_button" value="Check Out" id="submit2" />
          <button type="button" id="cancelButton">Cancel Order</button>
    </div>
  </form>

 <?php include_once ("footer.inc");
 ?>
</body>
</html>
