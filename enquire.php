<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Demonstrates assignment1" />
  <meta name="keywords"  content="HTML5, tags" />
  <meta name="author"  content="Rohan Soni" />
  <title>Enquire</title>
  <link href="styles/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/responsive.css" media="screen and (max-width: 568px)" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="scripts/part2.js"></script>
</head>
<body>
  <?php
  $page = "enquire_page";
  include_once ("header.inc");
   ?>
   <div id="bg-img3"></div>
  <article class="main10">
    <h1>Tell us about your event</h1>
    <hr class="afthd">
      <p><span>When U hire </span>offers completely free services and has a team of venue experts always ready to help you in need.</p>
      <p>Let us find you the perfect venue.</p>
      <p>A <span class="mark">venue expert</span> will shortly be in touch with you.</p>
  </article>
  <form method="post" action="payment.php" id="AssgnFrm1" novalidate="novalidate">
    <fieldset>
      <legend>Contact details</legend>
      <p>
        <label for="fname">First name: </label>
        <input type="text" name="First name" id="fname" maxlength="25" required="required" pattern="^[a-zA-Z]+$" />
      </p>
      <p>
        <label for="lname">Last name: </label>
        <input type="text" name="Last name" id="lname" maxlength="25" required="required" pattern="^[a-zA-Z]+$" />
      </p>
      <p>
        <label for="contemail">Email address: </label>
        <input type="email" id="contemail" name="Email address" placeholder="name@domain.com" required="required" />
      </p>
      <fieldset>
        <legend>Address</legend>
        <p>
          <label for="stadd">Street address:</label>
          <input type="text" name="Street address" id="stadd" maxlength="40" required="required" />
        </p>
        <p>
            <label for="sub">Suburb/town: </label>
            <input type="text" name="Suburb/town" id="sub" maxlength="20" required="required" />
        </p>
        <p>
          <label for="state">State: </label>
          <select name="Your State" id="state" required="required">
            <option value="">Please select</option>
            <option value="VIC">VIC</option>
            <option value="NSW">NSW</option>
            <option value="QLD">QLD</option>
            <option value="NT">NT</option>
            <option value="WA">WA</option>
            <option value="SA">SA</option>
            <option value="TAS">TAS</option>
            <option value="ACT">ACT</option>
          </select>
        </p>
        <p>
          <label for="pcode">Postcode: </label>
          <input type="text" name="Postcode" id="pcode" maxlength="4" required="required" />
        </p>
      </fieldset>
      <p>
        <label for="pno">Phone no: </label>
        <input type="text" id="pno" name="Phone no" placeholder="##########" required="required" pattern="[0-9]{1,10}" />
      </p>
      <p>
          <label>Preferred contact: </label>
          <br />
          <br />
          <label for="email">Email</label>
          <input type="radio" id="email" name="Preferred contact" value="email" checked="checked" />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label for="post">post</label>
          <input type="radio" id="post" name="Preferred contact" value="post" />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label for="phone">Phone</label>
          <input type="radio" id="phone" name="Preferred contact" value="phone" />
      </p>
      <fieldset>
        <legend>Event Details</legend>
        <p>
          <label for="etype">Event type: </label>
          <select name="Event type" id="etype" required="required">
            <option value="">Please select your event type</option>
            <option value="conference">Conference</option>
          </select>
        </p>
        <p>
          <label for="loc">Location: </label>
          <select name="Location" id="loc" required="required">
            <option value="">Please select a location</option>
            <option value="Vict">Victoria</option>
            <option value="New">New South Wales</option>
            <option value="Queen">Queensland</option>
          </select>
        </p>
        <p>
          <label for="nop">No of people: </label>
          <input type="number" name="People" id="nop" min="1" max="100" step="1" value="25" />
        </p>
        <p>
          <label for="specreq">Specific requirements: </label>
          <br />
          <textarea id="specreq" name="Specific requirements" rows="5" cols="45" placeholder="Tell us more about your event and if any specific requirements...">
          </textarea>
        </p>
      </fieldset>
      <fieldset>
        <legend>Event Extras</legend>
        <aside id="ad">
          <h4>Price details:</h4>
          <hr class="faq" />
          <p>Banquet: &nbsp;&nbsp;&nbsp;&nbsp; AUD 45 per person per day</p>
          <p>Boardroom: &nbsp;&nbsp;&nbsp; AUD 40 per person per day</p>
          <p>U-Shaped: &nbsp;&nbsp;&nbsp;  AUD 41 per person per day</p>
          <p>Standing: &nbsp;&nbsp;&nbsp; AUD 37 per person per day</p>
          <p>Theatre: &nbsp;&nbsp;&nbsp; AUD 45 per person per day</p>
          <p>Pod-Seating: &nbsp;&nbsp; AUD 47 per person per day</p>
        </aside>
        <p>
          The extra details helps us send the most relevant suggestions to you. Select all that apply.
        </p>

        <p>
          <label for="style">Venue style: </label>
          <select name="Venue style" id="style">
            <option value="none">Any venue style</option>
            <option value="trad">Traditional</option>
            <option value="mod">Modern</option>
            <option value="cas">Casual</option>
            <option value="corp">Corporate</option>
            <option value="spac">Spacious</option>
            <option value="afford">Affordable</option>
          </select>
        </p>
        <p>
          <label for="layout">Venue layout: </label>
          <select name="Venue layout" id="layout">
            <option value="none">Any layout</option>
            <option value="banq">Banquet</option>
            <option value="boad">Boardroom</option>
            <option value="stand">Standing</option>
            <option value="theat">Theatre</option>
            <option value="ushape">U-shaped</option>
            <option value="pod">Pod seating</option>
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
          <input type="text" name="Quantity" id="Quantity" required="required" />
        </p>
      </fieldset>
    </fieldset>
    <div class="link">
          <input type="submit" value="Pay Now" id="submit" />
    </div>
  </form>
  <?php include_once ("footer.inc");
  ?>
</body>
</html>
