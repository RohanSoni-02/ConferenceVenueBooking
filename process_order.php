<?php
      //Not accessed directly through URL
      if (!isset($_POST["Submit_button"])) {
        header ("location: enquire.php");
        exit();
      }

      function sanitise_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      if (isset($_POST["firstname"])) {
        $firstname = $_POST["firstname"];
      }
      if (isset($_POST["lastname"])) {
        $lastname = $_POST["lastname"];
      }
      if (isset($_POST["UserEmail"])) {
        $email = $_POST["UserEmail"];
      }
      if (isset($_POST["address"])) {
        $street = $_POST["address"];
      }
      if (isset($_POST["usrstate"])) {
        $state = $_POST["usrstate"];
      }
      if (isset($_POST["postcode"])) {
        $postcode = $_POST["postcode"];
      }
      if (isset($_POST["PrefContact"])) {
        $prefContact = $_POST["PrefContact"];
      }
      if (isset($_POST["PhoneNo"])) {
        $phone = $_POST["PhoneNo"];
      }
      if (isset($_POST["NoOfPeople"])) {
        $people = $_POST["NoOfPeople"];
      }
      if (isset($_POST["Style"])) {
        $style = $_POST["Style"];
      }
      if (isset($_POST["layout"])) {
        $layout = $_POST["layout"];
      }
      if (isset($_POST["Quantity"])) {
        $days = $_POST["Quantity"];
      }
      if (isset($_POST["cost"])) {
        $cost = $_POST["cost"];
      }
      if (isset($_POST["cctype"])) {
        $cardType = $_POST["cctype"];
      }
      if (isset($_POST["CardName"])) {
        $cardName = $_POST["CardName"];
      }
      if (isset($_POST["CardNumber"])) {
        $cardNo = $_POST["CardNumber"];
      }
      if (isset($_POST["CardExpiry"])) {
        $cardExp = $_POST["CardExpiry"];
      }
      if (isset($_POST["CardVerify"])) {
        $cardVerify = $_POST["CardVerify"];
      }

      $firstname = sanitise_input($firstname);
      $lastname = sanitise_input($lastname);
      $email = sanitise_input($email);
      $street = sanitise_input($street);
      $suburb = sanitise_input($suburb);
      $state = sanitise_input($state);
      $postcode = sanitise_input($postcode);
      $prefContact = sanitise_input($prefContact);
      $phone = sanitise_input($phone);
      $people = sanitise_input($people);
      $days = sanitise_input($days);
      $style = sanitise_input($style);
      $layout = sanitise_input($layout);
      $cost = sanitise_input($cost);
      $cardType = sanitise_input($cardType);
      $cardName = sanitise_input($cardName);
      $cardNo = sanitise_input($cardNo);
      $cardExp = sanitise_input($cardExp);
      $cardVerify = sanitise_input($cardVerify);

      $errmsg = "";

      if ($firstname == "") {
        $errmsg .= "<p>You must enter your first name.</p>";
      }
      elseif (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
        $errmsg .= "<p>Only alpha letters allowed in your first name.</p>";
      }
      if ($lastname == "") {
        $errmsg .= "<p>You must enter your last name.</p>";
      }
      elseif (!preg_match("/^[a-zA-Z]*$/",$lastname)) {
        $errmsg .= "<p>Only alpha letters allowed in your last name.</p>";
      }
      if ($email == "") {
        $errmsg .= "<p>You must enter your email address.</p>";
      }
      if ($street == "") {
        $errmsg .= "<p>You must enter your street.</p>";
      }
      if ($prefContact == "") {
        $errmsg .= "<p>You must enter your preferred contact.</p>";
      }
      if ($state == "") {
        $errmsg .= "<p>You must enter your state.</p>";
      }
      if ($postcode=="") {
			  $errmsg .= "<p>Please enter your postcode.</p>";
  		}
  		elseif (!preg_match("/^(?:(?:[2-8]\d|9[0-7]|0?[28]|0?9(?=09))(?:\d{2}))$/",$postcode)) {
  			$errmsg .= "<p>Postcode is invalid</p>";
  		}
  		if ($state=='VIC' && !preg_match("/^3|^8/",$postcode)) {
  			$errmsg .= "<p>A postcode for Victoria must start with 3 or 8.</p>";
  		}
  		elseif ($state=='NSW' && !preg_match("/^1|^2/",$postcode)) {
  			$errmsg .= "<p>A postcode for NSW must start with 1 or 2.</p>";
  		}
      elseif ($state=='QLD' && !preg_match("/^4|^9/",$postcode)) {
  			$errmsg .= "<p>A postcode for NSW must start with 1 or 2.</p>";
  		}
  		elseif ($state=='NT' && !preg_match("/^0/",$postcode)) {
  			$errmsg .= "<p>A postcode for Northern Territory must start with 0.</p>";
  		}
  		elseif ($state=='WA' && !preg_match("/^6/",$postcode)) {
  			$errmsg .= "<p>A postcode for Western Australia must start with 6.</p>";
  		}
  		elseif ($state=='SA' && !preg_match("/^5/",$postcode)) {
  			$errmsg .= "<p>A postcode for South Australia must start with 5.</p>";
  		}
  		elseif ($state=='TAS' && !preg_match("/^7/",$postcode)) {
  			$errmsg .= "<p>A postcode for Tasmania must start with 7.</p>";
  		}
  		elseif ($state=='ACT' && !preg_match("/^0/",$postcode)) {
  			$errmsg .= "<p>A postcode for ACT must start with 0.</p>";
  		}

      if ($phone == "") {
        $errmsg .= "<p>You must enter your phone number.</p>";
      }
      elseif (!preg_match("/^[0-9]{10}$/",$phone)) {
        $errmsg .= "<p>Your phone number must be 10 digits.</p>";
      }
      if ($people == "") {
        $errmsg .= "<p>You must enter number of people.</p>";
      }
      if ($days == "") {
        $errmsg .= "<p>You must enter number of days.</p>";
      }
      elseif (!preg_match("/^[0-9]+$/",$days)) {
        $errmsg .= "<p>No. of days should be a positive number.</p>";
      }
      if ($style == "none") {
        $errmsg .= "<p>Please select a Venue style.</p>";
      }
      if ($layout == "none") {
        $errmsg .= "<p>Please select a Venue layout.</p>";
      }
      //Select one of Visa, MasterCard or American Express
      if ($cardType == "none") {
        $errmsg .= "<p>Credit card type must be one of Visa, Mastercard, or American Express.</p>";
      }
      if ($cardName == "") {
        $errmsg .= "<p>Please enter your card name.</p>";
      }
      elseif (!preg_match("/^[a-zA-Z ]*$/",$cardName)) {
        $errmsg .= "<p>Card name should be alphabetical and space only.</p>";
      }
      if ($cardNo == "") {
        $errmsg .= "<p>Please enter your card number.</p>";
      }
      elseif (!preg_match("/[0-9]{15,16}/",$cardNo)) {
        $errmsg .= "<p>Card number should be exactly 15 or 16 digits.</p>";
      }
      //Validation for card number according to type
      if (preg_match("/^[0-9]+$/",$cardNo)) {
        //First digit 4
        if ($cardType=="Visa") {
          if (!preg_match("/^4[0-9]{15}$/",$cardNo)) {
            $errmsg .= "<p>Visa cards have 16 digits and start with a 4.</p>";
          }
        }
        // First digits 51,52,53,54 or 55
        elseif ($cardType=="Mastercard") {
          if (!preg_match("/^5[1-5][0-9]{14}$/",$cardNo)) {
            $errmsg .= "<p>MasterCard have 16 digits and start with digits 51 through to 55.</p>";
          }
        }
        // First digits 34 or 37
        elseif ($cardType=="AE") {
          if (!preg_match("/^3[4,7][0-9]{13}$/",$cardNo)) {
            $errmsg .= "<p>American Express has 15 digits and starts with 34 or 37.</p>";
          }
        }
      }
      if ($cardExp == "") {
        $errmsg .= "<p>Please enter your card expiry.</p>";
      }
      elseif (!preg_match("/(0[1-9]|1[012])-[0-9]{2}/",$cardExp)) {
        $errmsg .= "<p>Card expiry should match the mm-yy pattern.</p>";
      }
      if ($cardVerify == "") {
        $errmsg .= "<p>Please enter your card verification value.</p>";
      }
      elseif (!preg_match("/^[0-9]{3}$/",$cardVerify)) {
        $errmsg .= "<p>Card expiry should match the mm-yy pattern.</p>";
      }

      if ($errmsg != "") {
            session_start();
            $_SESSION["firstname"] = $firstname;
            $_SESSION["lastname"] = $lastname;
            $_SESSION["UserEmail"] = $email;
            $_SESSION["address"] = $street;
            $_SESSION["usrstate"] = $state;
            $_SESSION["postcode"] = $postcode;
            $_SESSION["PrefContact"] = $prefContact;
            $_SESSION["PhoneNo"] = $phone;
            $_SESSION["NoOfPeople"] = $people;
            $_SESSION["Style"] = $style;
            $_SESSION["layout"] = $layout;
            $_SESSION["Quantity"] = $days;
            $_SESSION["cost"] = $cost;
            $_SESSION["cctype"] = $cardType;
            $_SESSION["CardName"] = $cardName;
            $_SESSION["CardNumber"] = $cardNo;
            $_SESSION["CardExpiry"] = $cardExp;
            $_SESSION["CardVerify"] = $cardVerify;

          header("location: fix_order.php?errmsg=$errmsg");
          exit();
      }
        if ($layout == "stand") {
            $tcost = 37;
        }
        elseif ($layout == "none") {
            $tcost = 0;
        }
        elseif ($layout == "banq") {
          $tcost = 45;
        }
        elseif ($layout == "boad") {
          $tcost = 40;
        }
        elseif ($layout == "theat") {
          $tcost = 45;
        }
        elseif ($layout == "ushape") {
          $tcost = 41;
        }
        elseif ($layout == "pod") {
          $tcost = 47;
        }
        $cost = $tcost * $people * $days;

      // If no error, insert into database , redirect to receipt.php
      session_start();
      $db_msg="";
      require_once "settings.php";
      $conn = mysqli_connect ($host,$user,$pwd,$sql_db);
      if ($conn) { 		// create table if it doesn't exist
        $query = "CREATE TABLE IF NOT EXISTS orders (
                  order_id INT AUTO_INCREMENT PRIMARY KEY,
                  first_name VARCHAR(25),
                  last_name VARCHAR(25),
                  email VARCHAR(30),
                  phone_no INT(10),
                  street VARCHAR(40),
                  suburb VARCHAR(20),
                  state VARCHAR(5),
                  postcode INT(4),
                  preffered_contact VARCHAR(20),
                  venue_style VARCHAR(20),
                  venue_layout VARCHAR(20),
                  no_of_people INT,
                  no_of_days INT,
                  order_cost INT,
                  order_time timestamp DEFAULT CURRENT_TIMESTAMP,
                  card_type VARCHAR(20),
                  cardHolder_name VARCHAR(40),
                  card_no INT(16),
                  order_status enum('PENDING', 'PAID', 'FULFILLED', 'ARCHIVED') DEFAULT 'PENDING'
                  );";

        $result = mysqli_query ($conn, $query);
        if ($result) {
          $query = "insert into orders (first_name, last_name, email, phone_no, street, suburb, state, postcode, preffered_contact, venue_style, venue_layout, no_of_people, no_of_days, order_cost, card_type, cardHolder_name, card_no) values ('$firstname','$lastname','$email','$phone','$street','$suburb','$state','$postcode','$prefContact','$style','$layout','$people','$days','$cost','$cardType','$cardName','$cardNo');";
          $insert_result = mysqli_query ($conn, $query);

          if ($insert_result) {	//   insert successfully
            $date = date('Y-m-d H:i:s');
            function getTruncatedCCNumber($cardNo){
              return str_replace(range(0,9), "*", substr($cardNo, 0, -4)) .  substr($cardNo, -4);
            }
          $num = getTruncatedCCNumber($cardNo);
          $db_msg="<table border = \"1\">\n"
                   . "<tr><th>Order ID</th><td>" . mysqli_insert_id($conn) . "</td></tr>"
                    . "<tr><th>First Name</th><td>$firstname</td></tr>"
                    . "<tr><th>Last Name</th><td>$lastname</td></tr>"
                    . "<tr><th>Email</th><td>$email</td></tr>"
                    . "<tr><th>Street Address</th><td>$street</td></tr>"
                    . "<tr><th>State</th><td>$state</td></tr>"
                    . "<tr><th>Postcode</th><td>$postcode</td></tr>"
                    . "<tr><th>Preferred Contact</th><td>$prefContact</td></tr>"
                    . "<tr><th>Phone Number</th><td>$phone</td></tr>"
                    . "<tr><th>Venue style</th><td>$style</td></tr>"
                    . "<tr><th>Venue layout</th><td>$layout</td></tr>"
                    . "<tr><th>No of people</th><td>$people</td></tr>"
                    . "<tr><th>Card Type</th><td>$cardType</td></tr>"
                    . "<tr><th>Name on Card</th><td>$cardName</td></tr>"
                    . "<tr><th>Card Number</th><td>$num</td></tr>"
                    . "<tr><th>Total Amount</th><td>$cost</td></tr>"
                    . "<tr><th>Status of Order</th><td>PENDING</td></tr>"
                    . "<tr><th>Order Time</th><td>$date</td></tr>"
                    . "</table>";
        }
        else {
          $db_msg= "<p>Insert unsuccessful.</p>";
        }
      }
      else {
        $db_msg= "<p>Create table operation unsuccessful.</p>";
      }
      //  redirect to receipt.php
      $_SESSION["db_msg"] = $db_msg;
      header ("location: receipt.php");
      mysqli_close ($conn);
      }
      else {
      $db_msg= "<p>Unable to connect to the database.</p>";
      }



?>
