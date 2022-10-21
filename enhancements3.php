<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="description" content="Assignment3"  />
<meta name="keywords" content="PHP, MySql" />
<title>Manager</title>
<link href="styles/style.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles/responsive.css" media="screen and (max-width: 568px)" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php
$page = "enhancements3_page";
include_once ("header.inc");
 ?>
 <div id="bg-img3"></div>
 <article class="main15">
   <h1>Enhancements</h1>
   <hr class="afthd">
     <p>Below are list of enhancements used in the website which implement features/techniques that go beyond the specified requirements.
     </p>
     <ul>
       <li><span>Average no of orders per day</span>
         <ul>
           <li>Displays the average number of orders per day.</li>
           <li>It is implemented by using AVG() statement in mysql query from counting the no of order days using count() and stores in order_num.</li>
           <li> <a href="manager.php" class="normal"> Click me</a> </li>
         </ul>
       </li>
       <li><span>Most popular product ordered</span>
         <ul>
           <li>Displays the product selected the most number of times.</li>
           <li>It is implemented by using myql select query and using the count(). </li>
           <li>URL: <a href="https://stackoverflow.com/questions/12235595/find-most-frequent-value-in-sql-column" class="normal">Most popular product</a></li>
           <li> <a href="manager.php" class="normal"> Click me</a></li>
         </ul>
       </li>
       <li><span>Last visited</span>
         <ul>
           <li>Displays when the user last visited the website using cookies.</li>
           <li>It is implemented via using setcookie() and time is diplayed using the function date_default_timezone_set(). </li>
           <li>URL: <a href="https://krazytech.com/programs/php-display-last-visited-date-time#:~:text=%20%20%201%20You%20need%20to%20copy,to%20find%20%E2%80%9CYour%20last%20visited%20time%E2%80%9D.%20More%20" class="normal">Last visit</a></li>
           <li> <a href="manager.php" class="normal"> Click me</a> </li>
         </ul>
       </li>
     </ul>
   <hr class="afthd">
 </article>
 <?php include_once ("footer.inc");
 ?>
</body>
</html>
