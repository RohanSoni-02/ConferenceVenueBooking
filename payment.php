<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Demonstrates assignment2" />
  <meta name="keywords"  content="HTML5, tags" />
  <meta name="author"  content="Rohan Soni" />
  <title>Payment</title>
  <link href="styles/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/responsive.css" media="screen and (max-width: 568px)" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="scripts/enhancements.js"> </script>
  <script src="scripts/part2_1.js" async> </script>


</head>
<body>
<?php
$page = "payment_page";
include_once ("header.inc");
 ?>
 <div id="bg-img2"></div>
  <article class="payht">
    <h2>When U Hire > Cart</h2>
    <hr class="afthd">
      <p><span id="timer"></span></p>
      <p>U have selected the following venue from <span>When U hire. </span></p>
      <p>Below are the details: </p>
  </article>
  <form id="AssgnFrm2" action="process_order.php" method="post" novalidate="novalidate">
      <p>Your Name: <span id="confirm_name"></span></p>
  		<p>Phone no: <span id="confirm_phone"></span></p>
      <p>Email: <span id="confirm_email"></span></p>
      <p>Address: <span id="confirm_address"></span></p>
      <p>State: <span id="confirm_state"></span></p>
      <p>Postcode: <span id="confirm_postcode"></span></p>
      <p>Preferred contact: <span id="confirm_prefcont"></span></p>
  		<p>Venue Style: <span id="confirm_style"></span></p>
  		<p>Venue Layout: <span  id="confirm_layout"></span></p>
  		<p>Number of People: <span  id="confirm_People"></span></p>
  		<p>Number of Days: <span  id="confirm_days"></span></p>
  		<p>Total Cost: $<span  id="confirm_cost"></span></p>
      <input type="hidden" name="firstname" id="ufirstname" />
      <input type="hidden" name="lastname" id="ulastname" />
      <input type="hidden" name="UserEmail" id="usremail" />
      <input type="hidden" name="address" id="uaddress" />
      <input type="hidden" name="usrstate" id="urstate" />
      <input type="hidden" name="postcode" id="upostcode" />
      <input type="hidden" name="PrefContact" id="usrprefcont" />
      <input type="hidden" name="PhoneNo" id="uphone" />
      <input type="hidden" name="Style" id="venueStyle" />
      <input type="hidden" name="layout" id="venueLayout" />
      <input type="hidden" name="NoOfPeople" id="attPeople" />
      <input type="hidden" name="Quantity" id="NoOfDays" />
      <input type="hidden" name="cost" id="cost" />
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
        <input type="text" name="CardName" id="ccName" maxlength="40" required="required" pattern="^[a-zA-Z ]+$" />
      </p>
      <p>
        <label for="ccNum">Credit Card Number: </label>
        <input type="text" name="CardNumber" id="ccNum" required="required" pattern="[0-9]{15,16}" />
      </p>
      <p>
        <label for="ccExp">Credit Card Expiry date: </label>
        <input type="text" name="CardExpiry" id="ccExp" required="required" pattern="(0[1-9]|1[012])-[0-9]{2}" placeholder="mm-yy" />
      </p>
      <p>
        <label for="ccCVV">Card Verification Value: </label>
        <input type="text" name="CardVerify" id="ccCVV" maxlength="3" required="required" pattern="^[0-9]+$" />
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
