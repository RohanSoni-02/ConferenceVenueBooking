<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Demonstrates assignment1" />
  <meta name="keywords"  content="HTML5, tags" />
  <meta name="author"  content="Rohan Soni" />
  <title>Product page</title>
  <link href="styles/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/responsive.css" media="screen and (max-width: 568px)" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
  <?php
  $page = "product_page";
  include_once ("header.inc");
   ?>
   <div id="bg-img4"></div>
  <div id="mySidenav" class="sidenav">
    <a href="#main6" id="banq">Banquet</a>
    <a href="#main7" id="board">Boardroom</a>
    <a href="#main8" id="ushap">U-shaped</a>
    <a href="#main9" id="pod">Pod seating</a>

  </div>
  <br />
  <article class="main5">
    <h1>Recommended Conference Venues</h1>
      <hr class="afthd">
      <p><span>When U Hire </span>offers a large variety of conference venues to select from.
        Here, at When U Hire, our very best effort will be that you dont miss out on the best of the Conference venues <span class="mark">Australia </span>has to offer with purpose built-centres to more unususal venues,
        all complete with <span class="mark">top notch facilities.</span>
        Below are some of the most <span>Recommended Venues</span> by When U Hire.
      </p>
    <hr class="afthd">
    <section id="main6">
      <h2>Banquet</h2>
      <hr class="afthd">
      <h3>Hotel Sapphire</h3>
      <figure class="venues">
          <img src="images/banquet.jpeg" alt="banquet" width="500" height="400" />
      </figure>

      <p>Hotel Sapphire is a venue located in the Victoria. Your event deserves to be celebrated in the grandest way possible and this banquet hall is one of the best options to host your event. This magnificent banquet hall provides an atmosphere which makes the ceremonies go with happiness and ease. </p>
      <p>They also offer more than one event space in the venue to ensure the smooth functioning of simultaneous events.</p>
      <p><strong>Facilities and services</strong></p>
      <ul>
        <li>Rooms</li>
        <li>DJ</li>
        <li>Catering and menus
          <ol>
            <li>Italian</li>
            <li>European</li>
            <li>Continental</li>
            <li>Garlic free</li>
            <li>Onion free</li>
          </ol>
        </li>
      </ul>
    </section>
    <br /><br /><br />
    <hr class="afthd">
    <section id="main7">
      <h2>Boardroom</h2>
      <hr class="afthd">
      <h3>Haldus</h3>
      <aside id="ad">
        <p>USED BY OVER</p>
        <p>20,000</p>
        <p>CUSTOMERS</p>
      </aside>
      <p>A 30-50 Seating Conference Hall suitable for carrying official meetings, trainings or for any other kind of corporate get-together parties.</p>
      <p> We can arrange all kind of seating set-up whether it is Board-room, Cluster, theatre or class room.</p>
      <p>This latest facility is built with futuristic design and state-of-the-art infrastructure to meet international standards. This business centre offers smart and intelligent workspaces, designed keeping in mind any business requirements.</p>
      <p><strong>Facilities and services</strong></p>
      <ul>
        <li>WIFI</li>
        <li>Projection Screen</li>
        <li>Video Conferencing System</li>
        <li>Digital Projectors</li>
      </ul>

    </section>

    <hr class="afthd">
    <section id="main8">
      <h2>U-shaped</h2>
      <hr class="afthd">
      <h3>Soni hall</h3>
      <figure class="venues">
        <img src="images/ushaped.jpeg" alt="ushaped" width="500" height="400" />
      </figure>

      <p> A letter U setup of tables and chairs arranged in an open-ended shape with the participants facing inwards. It is a classic boardroom setup that enables members to both face each other and the speaker.</p>
      <p> Removing the tables and only having chairs in a U-shape allows for open interaction between the trainers and participants.</p>
      <p> This version is often used for soft skills development trainings and workshops.</p>
      <p><strong>Facilities and services</strong></p>
      <ul>
        <li>WIFI</li>
        <li>Video Conferencing System</li>
      </ul>
      <br /><br /><br /><br />
    </section>
    <br />
    <hr class="afthd">
    <section id="main9">
      <h2>Pod Seating</h2>
      <hr class="afthd">
      <figure class="venues">
        <img src="images/pod.jpeg" alt="pod" width="500" height="400" />
      </figure>

      <p> Pod seating is great for small group discussions that require a leader or moderator. You can also use them during seminar breakout sessions to give your attendees some one-on-one time with presenters.</p>
      <p>Office Pods are available in various sizes from small phone / video conferencing booths, mobile work & study pods to large meeting rooms.</p>
      <p>All pods have included interior sound absorbing & blocking acoustic properties upholstered in wool or optional antibacterial fabrics</p>
      <p><strong>Facilities and services</strong></p>
      <ul>
        <li>Built-in air-circulation</li>
        <li>Lighting</li>
        <li>Video Conferencing booths</li>
        <li>Electrics</li>
        <li>Furniture</li>
      </ul>
    </section>
    <br /><br /><br /><br /><br /><br />
    <hr class="afthd">
    <aside>
      <h3>People also search for</h3>
      <hr class="faq" />
      <p>Press Conference Venues in Australia</p>
      <p>Lecture Theatres in Australia</p>
      <p>Tech Event Venues in Australia</p>
      <p>Workshop Venues in Australia</p>
      <p>Modern Conference Venues in Australia</p>
    </aside>
  </article>

  <h2 id="btab">At a Glance</h2>

  <table id="prod">
    <caption>Summary of prices and facilities available</caption>
    <thead class="thd">
      <tr>
        <th></th>
        <th colspan="2">Price</th>
        <th colspan="3">Facilities and specs</th>
      </tr>
      <tr>
        <th></th>
        <th>Weekdays</th>
        <th>Weekends</th>
        <th>Guest Rooms</th>
        <th>Area</th>
        <th>Maximum Capacity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="thd">Banquet</th>
        <td>AUD 45 per person</td>
        <td>AUD 55 per person</td>
        <td>Yes</td>
        <td>1500 sq.m</td>
        <td>400</td>
      </tr>
      <tr>
        <th class="thd">Boardroom</th>
        <td>AUD 40 per person</td>
        <td>AUD 42 per person</td>
        <td>No</td>
        <td>1100 sq.m</td>
        <td>80</td>
      </tr>
      <tr>
        <th class="thd">U-shaped</th>
        <td>AUD 41 per person</td>
        <td>AUD 44 per person</td>
        <td>No</td>
        <td>980 sq.m</td>
        <td>50</td>
      </tr>
      <tr>
        <th class="thd">Standing</th>
        <td>AUD 37 per person</td>
        <td>AUD 49 per person</td>
        <td>No</td>
        <td>600 sq.m</td>
        <td>70</td>
      </tr>
      <tr>
        <th class="thd">Theatre</th>
        <td>AUD 45 per person</td>
        <td>AUD 50 per person</td>
        <td>Yes</td>
        <td>1200 sq.m</td>
        <td>280</td>
      </tr>
      <tr>
        <th class="thd">Pod seating</th>
        <td>AUD 47 per person</td>
        <td>AUD 49 per person</td>
        <td>No</td>
        <td>550 sq.m</td>
        <td>180</td>
      </tr>
    </tbody>
  </table>
  <br /><br /><br /><br /><br /><br />
  <?php include_once ("footer.inc");
  ?>
</body>
</html>
