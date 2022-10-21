<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Demonstrates assignment1" />
  <meta name="keywords"  content="HTML5, tags" />
  <meta name="author"  content="Rohan Soni" />
  <meta name="viewport" content="width=device-width, intial-scale= 1.0" />
  <title>Enhancements page</title>
  <link href="styles/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/responsive.css" media="screen and (max-width: 568px)" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <?php
  $page = "enhancements2_page";
  include_once ("header.inc");
   ?>
   <div id="bg-img2"></div>
  <article class="main15">
    <h1>Enhancements</h1>
    <hr class="afthd">
      <p>Below are list of enhancements used in the website which implement features/techniques that go beyond the specified requirements.
      </p>
      <ul>
        <li><span>Countdown Timer</span>
          <ul>
            <li>The timer used displays an on onscreen countdown timer of 3 minutes and prompts the user when 1 minute is left. When a time period of 3 minutes end, the user is redirected to home page</li>
            <li>The timer is inserted using functions setInterval and clearInterval in a function onScreenTimer which is later called in init function. The browser redirects the user using window.location. </li>
            <li>URL: <a href="https://stackoverflow.com/questions/1191865/code-for-a-simple-javascript-countdown-timer" class="normal">Countdown Timer</a></li>
            <li> <a href="payment.html" class="normal"> Click me</a> </li>
          </ul>
        </li>
        <li><span>Confetti effect</span>
          <ul>
            <li>It is used to create a confetti effect when the screen loads.</li>
            <li>The canvas element is used to draw graphics. Also, setTimeout is used to start the confetti after 1 second in a start function and end the confetti after 5 seconds in stop function.</li>
            <li>URL: <a href="https://www.youtube.com/watch?v=quSR_ZrVz6Y" class="normal">Confetti effect</a></li>
            <li> <a href="payment.html" class="normal"> Click me</a> </li>
          </ul>
        </li>
      </ul>
    <hr class="afthd">

  </article>
  <?php include_once ("footer.inc");
  ?>
</body>
</html>
