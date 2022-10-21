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
  $page = "manager_page";
  include_once ("header.inc");
   ?>
   <div id="bg-img4"></div>
   <h1>Select Orders: </h1>
   <h3>User's Last Visit to Website:</h3>
   <?php
    date_default_timezone_set('Asia/Calcutta');

    $inTwoMonths = 60 * 60 * 24 * 60 + time();
    setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths);
    if(isset($_COOKIE['lastVisit']))

    {
    $visitedWeb = $_COOKIE['lastVisit'];
    echo "Your last visit was - ". $visitedWeb;
    }
    else
    echo "You've got some stale cookies!";
    ?>
    <br><br><br>
    <form method="post" action="manager.php">
      <div class="link">
        <input type="submit" name="button1" value="All orders" id="submit"/>
        </div>
        <br><br>
        <fieldset><legend>Filter by Name</legend>
             <p><label for="FiltName">First Name: </label>
             <input type="text" name="FiltName" id="FiltName" />
             <div class="link">
             <input type="submit" name="button2" value="Filter on First name" id="submit"/></div></p>

             </fieldset>
        <br><br>
        <fieldset><legend>Filter by Product</legend>
             <p><label for="FiltStyle">Style: </label>
             <input type="text" name="FiltStyle" id="FiltStyle" />
             <div class="link">
             <input type="submit" name="button3" value="Filter by Style" id="submit"/></div></p>
             <br>
             <p><label for="FiltLay">Layout: </label>
             <input type="text" name="FiltLay" id="FiltLay" />
             <div class="link">
             <input type="submit" name="button4" value="Filter by Layout" id="submit"/></div></p>

             </fieldset>
        <br><br>
        <div class="link">
        <input type="submit" name="button5" value="Pending Orders" id="submit"/>
        </div>
        <br>
        <br>
        <div class="link">
        <input type="submit" name="button6" value="Sort by cost" id="submit"/>
        </div>
        <br>
        <div class="link">
        <input type="submit" name="button7" value="Delete or update order status" id="submit"/>
        </div>
        <br><br>
        <div class="link">
        <input type="submit" name="button8" value="Average orders" id="submit"/></div></p>
        <br>
        <div class="link">
        <input type="submit" name="button9" value="Most popular order" id="submit"/></div></p>

    </form>
    <br>

  <?php
      require_once ("settings.php");

      session_start();
      if (isset($_SESSION["firstname"])) {
        $firstname = $_SESSION["firstname"];
      }
      if (isset($_SESSION["Style"])) {
        $style = $_SESSION["Style"];
      }
      if (isset($_SESSION["layout"])) {
        $layout = $_SESSION["layout"];
      }
      if (isset($_SESSION["cost"])) {
        $cost = $_SESSION["cost"];
      }
      $conn = @mysqli_connect($host,
                              $user,
                              $pwd,
                              $sql_db
      );

      if (!$conn) {
        echo "<p>Database connection failure </p>";
      }
      else {
        $sql_table = "orders";
        //Show all orders
        if(isset($_POST['button1'])) {
          $query = "select * from orders;";
          $result = mysqli_query($conn, $query);
          if (!$result) {
            echo "<p>Something is wrong with", $query, "</p>";
          }
          else {
            echo "<table border = \"1\" id=\"prod\">\n";
            echo "<tr>\n "
                ."<th scope=\"col\" class=\"thd\">Order ID</th>\n "
                ."<th scope=\"col\" class=\"thd\">First name</th>\n "
                ."<th scope=\"col\" class=\"thd\">Last name</th>\n "
                ."<th scope=\"col\" class=\"thd\">Venue style</th>\n "
                ."<th scope=\"col\" class=\"thd\">Venue layout</th>\n "
                ."<th scope=\"col\" class=\"thd\">People</th>\n "
                ."<th scope=\"col\" class=\"thd\">Days</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order cost</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order time</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order status</th>\n "
                ."<tr>\n ";

            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>\n ";
              echo "<td>",$row["order_id"],"</td>\n ";
              echo "<td>",$row["first_name"],"</td>\n ";
              echo "<td>",$row["last_name"],"</td>\n ";
              echo "<td>",$row["venue_style"],"</td>\n ";
              echo "<td>",$row["venue_layout"],"</td>\n ";
              echo "<td>",$row["no_of_people"],"</td>\n ";
              echo "<td>",$row["no_of_days"],"</td>\n ";
              echo "<td>",$row["order_cost"],"</td>\n ";
              echo "<td>",$row["order_time"],"</td>\n ";
              echo "<td>",$row["order_status"],"</td>\n ";
            }
            echo "</table>\n ";
            mysqli_free_result($result);
          }
          mysqli_close($conn);
        }
        //Sort by first name
        elseif (isset($_POST['button2'])) {
          $filtName = trim($_POST["FiltName"]);
          $query = "select * from orders where first_name like '%$filtName%' ";
          $result = mysqli_query($conn, $query);
          if (!$result) {
            echo "<p>Something is wrong with", $query, "</p>";
          }
          else {
            echo "<table border = \"1\" id=\"prod\">\n";
            echo "<tr>\n "
                ."<th scope=\"col\" class=\"thd\">Order ID</th>\n "
                ."<th scope=\"col\" class=\"thd\">First name</th>\n "
                ."<th scope=\"col\" class=\"thd\">Last name</th>\n "
                ."<th scope=\"col\" class=\"thd\">Venue style</th>\n "
                ."<th scope=\"col\" class=\"thd\">Venue layout</th>\n "
                ."<th scope=\"col\" class=\"thd\">People</th>\n "
                ."<th scope=\"col\" class=\"thd\">Days</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order cost</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order time</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order status</th>\n "
                ."<tr>\n ";

            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>\n ";
              echo "<td>",$row["order_id"],"</td>\n ";
              echo "<td>",$row["first_name"],"</td>\n ";
              echo "<td>",$row["last_name"],"</td>\n ";
              echo "<td>",$row["venue_style"],"</td>\n ";
              echo "<td>",$row["venue_layout"],"</td>\n ";
              echo "<td>",$row["no_of_people"],"</td>\n ";
              echo "<td>",$row["no_of_days"],"</td>\n ";
              echo "<td>",$row["order_cost"],"</td>\n ";
              echo "<td>",$row["order_time"],"</td>\n ";
              echo "<td>",$row["order_status"],"</td>\n ";
            }
            echo "</table>\n ";
            mysqli_free_result($result);
          }
          mysqli_close($conn);
        }
        //Sort by venue style
        elseif (isset($_POST['button3'])) {
          $filtStyle = trim($_POST["FiltStyle"]);
          $query = "select * from orders where venue_style like '%$filtStyle%' ";
          $result = mysqli_query($conn, $query);
          if (!$result) {
            echo "<p>Something is wrong with", $query, "</p>";
          }
          else {
            echo "<table border = \"1\" id=\"prod\">\n";
            echo "<tr>\n "
                ."<th scope=\"col\" class=\"thd\">Order ID</th>\n "
                ."<th scope=\"col\" class=\"thd\">First name</th>\n "
                ."<th scope=\"col\" class=\"thd\">Last name</th>\n "
                ."<th scope=\"col\" class=\"thd\">Venue style</th>\n "
                ."<th scope=\"col\" class=\"thd\">Venue layout</th>\n "
                ."<th scope=\"col\" class=\"thd\">People</th>\n "
                ."<th scope=\"col\" class=\"thd\">Days</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order cost</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order time</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order status</th>\n "
                ."<tr>\n ";

            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>\n ";
              echo "<td>",$row["order_id"],"</td>\n ";
              echo "<td>",$row["first_name"],"</td>\n ";
              echo "<td>",$row["last_name"],"</td>\n ";
              echo "<td>",$row["venue_style"],"</td>\n ";
              echo "<td>",$row["venue_layout"],"</td>\n ";
              echo "<td>",$row["no_of_people"],"</td>\n ";
              echo "<td>",$row["no_of_days"],"</td>\n ";
              echo "<td>",$row["order_cost"],"</td>\n ";
              echo "<td>",$row["order_time"],"</td>\n ";
              echo "<td>",$row["order_status"],"</td>\n ";
            }
            echo "</table>\n ";
            mysqli_free_result($result);
          }
          mysqli_close($conn);
        }
        //Sort by venue layout
        elseif (isset($_POST['button4'])) {
          $filtLay = trim($_POST["FiltLay"]);
          $query = "select * from orders where venue_layout like '%$filtLay%' ";
          $result = mysqli_query($conn, $query);
          if (!$result) {
            echo "<p>Something is wrong with", $query, "</p>";
          }
          else {
            echo "<table border = \"1\" id=\"prod\">\n";
            echo "<tr>\n "
                ."<th scope=\"col\" class=\"thd\">Order ID</th>\n "
                ."<th scope=\"col\" class=\"thd\">First name</th>\n "
                ."<th scope=\"col\" class=\"thd\">Last name</th>\n "
                ."<th scope=\"col\" class=\"thd\">Venue style</th>\n "
                ."<th scope=\"col\" class=\"thd\">Venue layout</th>\n "
                ."<th scope=\"col\" class=\"thd\">People</th>\n "
                ."<th scope=\"col\" class=\"thd\">Days</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order cost</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order time</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order status</th>\n "
                ."<tr>\n ";

            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>\n ";
              echo "<td>",$row["order_id"],"</td>\n ";
              echo "<td>",$row["first_name"],"</td>\n ";
              echo "<td>",$row["last_name"],"</td>\n ";
              echo "<td>",$row["venue_style"],"</td>\n ";
              echo "<td>",$row["venue_layout"],"</td>\n ";
              echo "<td>",$row["no_of_people"],"</td>\n ";
              echo "<td>",$row["no_of_days"],"</td>\n ";
              echo "<td>",$row["order_cost"],"</td>\n ";
              echo "<td>",$row["order_time"],"</td>\n ";
              echo "<td>",$row["order_status"],"</td>\n ";
            }
            echo "</table>\n ";
            mysqli_free_result($result);
          }
          mysqli_close($conn);
        }
        //Sort by pending orders
        elseif (isset($_POST['button5'])) {
          $query = "select * from orders where order_status like 'PENDING' ";
          $result = mysqli_query($conn, $query);
          if (!$result) {
            echo "<p>Something is wrong with", $query, "</p>";
          }
          else {
            echo "<table border = \"1\" id=\"prod\">\n";
            echo "<tr>\n "
                ."<th scope=\"col\" class=\"thd\">Order ID</th>\n "
                ."<th scope=\"col\" class=\"thd\">First name</th>\n "
                ."<th scope=\"col\" class=\"thd\">Last name</th>\n "
                ."<th scope=\"col\" class=\"thd\">Venue style</th>\n "
                ."<th scope=\"col\" class=\"thd\">Venue layout</th>\n "
                ."<th scope=\"col\" class=\"thd\">People</th>\n "
                ."<th scope=\"col\" class=\"thd\">Days</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order cost</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order time</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order status</th>\n "
                ."<tr>\n ";

            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>\n ";
              echo "<td>",$row["order_id"],"</td>\n ";
              echo "<td>",$row["first_name"],"</td>\n ";
              echo "<td>",$row["last_name"],"</td>\n ";
              echo "<td>",$row["venue_style"],"</td>\n ";
              echo "<td>",$row["venue_layout"],"</td>\n ";
              echo "<td>",$row["no_of_people"],"</td>\n ";
              echo "<td>",$row["no_of_days"],"</td>\n ";
              echo "<td>",$row["order_cost"],"</td>\n ";
              echo "<td>",$row["order_time"],"</td>\n ";
              echo "<td>",$row["order_status"],"</td>\n ";
            }
            echo "</table>\n ";
            mysqli_free_result($result);
          }
          mysqli_close($conn);
        }
        //Sort by ascending order cost
        elseif (isset($_POST['button6'])) {
          $query = "SELECT * FROM orders ORDER BY order_cost ASC";
          $result = mysqli_query($conn, $query);
          if (!$result) {
            echo "<p>Something is wrong with", $query, "</p>";
          }
          else {
            echo "<table border = \"1\" id=\"prod\">\n";
            echo "<tr>\n "
                ."<th scope=\"col\" class=\"thd\">Order ID</th>\n "
                ."<th scope=\"col\" class=\"thd\">First name</th>\n "
                ."<th scope=\"col\" class=\"thd\">Last name</th>\n "
                ."<th scope=\"col\" class=\"thd\">Venue style</th>\n "
                ."<th scope=\"col\" class=\"thd\">Venue layout</th>\n "
                ."<th scope=\"col\" class=\"thd\">People</th>\n "
                ."<th scope=\"col\" class=\"thd\">Days</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order cost</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order time</th>\n "
                ."<th scope=\"col\" class=\"thd\">Order status</th>\n "
                ."<tr>\n ";

            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>\n ";
              echo "<td>",$row["order_id"],"</td>\n ";
              echo "<td>",$row["first_name"],"</td>\n ";
              echo "<td>",$row["last_name"],"</td>\n ";
              echo "<td>",$row["venue_style"],"</td>\n ";
              echo "<td>",$row["venue_layout"],"</td>\n ";
              echo "<td>",$row["no_of_people"],"</td>\n ";
              echo "<td>",$row["no_of_days"],"</td>\n ";
              echo "<td>",$row["order_cost"],"</td>\n ";
              echo "<td>",$row["order_time"],"</td>\n ";
              echo "<td>",$row["order_status"],"</td>\n ";
            }
            echo "</table>\n ";
            mysqli_free_result($result);
          }
          mysqli_close($conn);
        }
        //Delete or update order status
        elseif(isset($_POST['button7'])) {
          $query = "select * from orders;";
          $result = mysqli_query($conn, $query);
          $record = mysqli_fetch_assoc ($result);
          if ($record) {
              echo "<table border = \"1\" id=\"prod\">\n";
              echo "<tr>\n "
                  ."<th scope=\"col\" class=\"thd\">Delete</th>\n "
                  ."<th scope=\"col\" class=\"thd\">Order ID</th>\n "
                  ."<th scope=\"col\" class=\"thd\">First name</th>\n "
                  ."<th scope=\"col\" class=\"thd\">Last name</th>\n "
                  ."<th scope=\"col\" class=\"thd\">Venue style</th>\n "
                  ."<th scope=\"col\" class=\"thd\">Venue layout</th>\n "
                  ."<th scope=\"col\" class=\"thd\">People</th>\n "
                  ."<th scope=\"col\" class=\"thd\">Days</th>\n "
                  ."<th scope=\"col\" class=\"thd\">Order cost</th>\n "
                  ."<th scope=\"col\" class=\"thd\">Order time</th>\n "
                  ."<th scope=\"col\" class=\"thd\">Order status</th>\n "
                  ."<th scope=\"col\" class=\"thd\">Change Order status</th>\n "
                  ."<tr>\n ";
                      while ($record) {
                        if ($record['order_status'] == 'PENDING') {
                          echo "<tr><td><a class=\"normal\" href='delete.php?id=".$record['order_id']."'>Delete</a></td>";
                        }
                        else {
                          echo "<tr><td></td>";
                        }
                        echo "<td>",$record["order_id"],"</td>\n ";
                        echo "<td>",$record["first_name"],"</td>\n ";
                        echo "<td>",$record["last_name"],"</td>\n ";
                        echo "<td>",$record["venue_style"],"</td>\n ";
                        echo "<td>",$record["venue_layout"],"</td>\n ";
                        echo "<td>",$record["no_of_people"],"</td>\n ";
                        echo "<td>",$record["no_of_days"],"</td>\n ";
                        echo "<td>",$record["order_cost"],"</td>\n ";
                        echo "<td>",$record["order_time"],"</td>\n ";
                        echo "<td>",$record["order_status"],"</td>\n ";
                        echo "<td><form action='update.php' method='post'>
                        <input type='hidden' name='order_id' value='".$record["order_id"]."'/>
                        <select class='form-control' id='order_status' name='order_status' onchange='submit();'>
                        <option disabled selected value>Please select</option>
                        <option value='PENDING'>PENDING</option>
                        <option value='PAID'>PAID</option>
                        <option value='FULFILLED'>FULFILLED</option>
                        <option value='ARCHIVED'>ARCHIVED</option>
                        </select></form></td></>";
                        $record = mysqli_fetch_assoc($result);
                      }
                      echo "</table>";
      				        mysqli_free_result ($result);
          }

          mysqli_close($conn);
        }
      }

   ?>
   <?php
   //Enhancement The average number of orders
   if (isset($_POST['button8'])) {
     require_once ("settings.php");
     $conn = mysqli_connect ($host,$user,$pwd,$sql_db);
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
     }

     $sql = "SELECT AVG(orders_num) FROM (SELECT order_time, COUNT( DISTINCT order_id ) orders_num FROM orders GROUP BY CAST( order_time AS DATE) )orders_per_day";

     $result = mysqli_query($conn, $sql);
     if ($result) {
         mysqli_close($conn);
         $record = mysqli_fetch_assoc ($result);
         $avgOrders = $record['AVG(orders_num)'];
         $avg = round($avgOrders,2);
         echo "<p>Average number of orders today (Overall): $avg</p>";
     }
     else {
         echo "Error calculating";
     }
   }

    ?>

    <?php
    //Enhancement: Most popular product of the day
    if (isset($_POST['button9'])) {
      require_once ("settings.php");    // Load MySQL log in credentials
      $conn = mysqli_connect ($host,$user,$pwd,$sql_db);
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }

      $sql = "SELECT venue_layout, COUNT(venue_layout) AS MOST_FREQUENT from orders GROUP BY venue_layout ORDER BY COUNT(venue_layout) DESC";

      $result = mysqli_query($conn, $sql);
      if ($result) {
          mysqli_close($conn);
          echo "<table border = \"1\" id=\"prod\">\n"
                   . "<tr><th class=\"thd\">Column</th><th class=\"thd\">Most popular</th></tr>"
                    . "<tr><th class=\"thd\">1</th><td>$layout</td></tr>"
                    . "</table>";
      }
      else {
          echo "Error displaying popular product";
      }
    }
     ?>

   <?php include_once ("footer.inc");
   ?>
</body>
</html>
