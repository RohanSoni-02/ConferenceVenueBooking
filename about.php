<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Demonstrates assignment1" />
  <meta name="keywords"  content="HTML5, tags" />
  <meta name="author"  content="Rohan Soni" />
  <title>About me</title>
  <link href="styles/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/responsive.css" media="screen and (max-width: 568px)" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body id="about">
  <?php
  $page = "about_page";
  include_once ("header.inc");
   ?>
   <div id="bg-img5"></div>
    <section id="main11">
      <hr class="afthd">
      <h2>ROHAN SONI</h2>
      <hr class="afthd">
      <p>Student at <span>Swinburne University of Technology</span> | <span class="mark">Bachelor of Computer Science</span></p>
      <p>Chandigarh, India.</p>
    </section>
    <hr class="afthd">
    <h3 id="myd">My details: </h3>
    <hr class="afthd">
    <dl>
      <dt>Name </dt>
      <dd>Rohan Soni</dd>
      <dt>Student ID </dt>
      <dd>103169933</dd>
      <dt>Course </dt>
      <dd>Bachelor of Computer Science</dd>
      <dt>Email</dt>
      <dd id="ema"><a href="mailto:103169933@student.swin.edu.au" id="em">103169933@student.swin.edu.au</a></dd>
    </dl>
    <figure id="mypic">
      <img src="images/Rohan.jpeg" alt="My photo" width="200" height="350" />
    </figure>
    <section id="main12">
      <div class="tpskl">
        <h4>Top Skills:</h4>
          <ul>
            <li>Engineering</li>
            <li>English</li>
            <li>Strategy</li>
          </ul>
      </div>
    </section>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <section id="main13">
      <div class="ipskl">
        <h4>Interpersonal Skills:</h4>
          <ul>
            <li>Leadership</li>
            <li>Problem Solving</li>
          </ul>
      </div>
    </section>
    <br /><br /><br /><br /><br /><br /><br /><br />
    <section id="main14">
      <div class="tts">
        <h4>Tools &amp; Technologies</h4>
        <ul>
          <li>Python (Programming Language)</li>
          <li>HTML</li>
          <li>CSS</li>
          <li>MySQL</li>
          <li>C++</li>
          <li>JavaScript</li>
        </ul>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <div class="w3-container">
        <div class="w3-light-grey">
          <p>Python (Programming Language) </p>
          <div class="w3-container w3-blue" id="python">85%</div>
        </div><br>

        <div class="w3-light-grey">
          <p>HTML</p>
          <div class="w3-container w3-green w3-center" id="phtml">100%</div>
        </div><br>

        <div class="w3-light-grey">
          <p>CSS</p>
          <div class="w3-container w3-red w3-center" id="pcss">100%</div>
        </div><br>
        <div class="w3-light-grey">
          <p>MySQL </p>
          <div class="w3-container w3-blue" id="MySQL">90%</div>
        </div><br>
        <div class="w3-light-grey">
          <p>C++</p>
          <div class="w3-container w3-green w3-center" id="Cpp">90%</div>
        </div><br>
        <div class="w3-light-grey">
          <p>JavaScript</p>
          <div class="w3-container w3-red w3-center" id="Js">80%</div>
        </div><br>
      </div>


      <br /><br />
    </section>
  <hr class="afthd">
  <table id="timetable">
    <caption>My Swinburne Time Table</caption>
    <thead>
      <tr>
        <th colspan="2" class="tabhead">Monday</th>
        <th class="tabhead">Tuesday</th>
        <th class="tabhead">Wednesday</th>
        <th colspan="2" class="tabhead">Thursday</th>
        <th class="tabhead">Friday</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="tabhead">8:00 am</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">8:30 am</th>
        <td class="tne">TNE 10005</td>
        <td></td>
        <td></td>
        <td class="itp">COS 10009</td>
        <td></td>
        <td class="itp">COS 10009</td>
      </tr>
      <tr>
        <th class="tabhead">9:00 am</th>
        <td class="tne">Practical 1(4)</td>
        <td></td>
        <td></td>
        <td class="itp">Workshop 2(2)</td>
        <td></td>
        <td class="itp">Workshop 1(22)</td>
      </tr>
      <tr>
        <th class="tabhead">9:30 am</th>
        <td class="tne">Hawthorn Online</td>
        <td></td>
        <td></td>
        <td class="itp">Hawthorn Online</td>
        <td></td>
        <td class="itp">Hawthorn EN 103</td>
      </tr>
      <tr>
          <th class="tabhead">10:00 am</th>
          <td class="tne"></td>
          <td class="itp">COS 10009</td>
          <td></td>
          <td class="itp"></td>
          <td></td>
          <td class="itp"></td>
      </tr>
      <tr>
        <th class="tabhead">10:30 am</th>
        <td class="tne"></td>
        <td class="itp">Live Online 1(1)</td>
        <td></td>
        <td class="itp">COS 10009</td>
        <td class="itp">COS 10009</td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">11:00 am</th>
        <td class="tne"></td>
        <td class="itp">Hawthorn Online</td>
        <td></td>
        <td class="itp">Lab 2 (2)</td>
        <td class="itp">Lab 1 (2)</td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">11:30 am</th>
        <td class="cwa">COS 10011</td>
        <td class="itp"></td>
        <td class="cwa">COS 10011</td>
        <td class="itp">Hawthorn Online</td>
        <td class="itp">Hawthorn ATC 627</td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">12:00 pm</th>
        <td class="cwa">Live Online 1(1)</td>
        <td></td>
        <td class="cwa">Lab 1(10)<br />Hawthorn Online</td>
        <td class="itp"></td>
        <td class="itp"></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">12:30 pm</th>
        <td class="cwa">Hawthorn Online</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">1:00 pm</th>
        <td class="cwa"></td>
        <td></td>
        <td class="cle">COS 10003</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">1:30 pm</th>
        <td></td>
        <td></td>
        <td class="cle">Live Online 1(1)</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">2:00 pm</th>
        <td></td>
        <td></td>
        <td class="cle">Hawthorn Online</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">2:30 pm</th>
        <td></td>
        <td class="cle">COS 10003</td>
        <td class="cle"></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">3:00 pm</th>
        <td></td>
        <td class="cle">Tutorial 1(41)</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">3:30 pm</th>
        <td></td>
        <td class="cle">Hawthorn Online</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">4:00 pm</th>
        <td></td>
        <td class="cle"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">4:30 pm</th>
        <td></td>
        <td class="cle"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">5:00 pm</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">5:30 pm</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">6:00 pm</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">6:30 pm</th>
        <td></td>
        <td></td>
        <td></td>
        <td class="tne">TNE10005</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">7:00 pm</th>
        <td></td>
        <td></td>
        <td></td>
        <td class="tne">Live Online 1(1)</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">7:30 pm</th>
        <td></td>
        <td></td>
        <td></td>
        <td class="tne">Hawthorn Online</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">8:00 pm</th>
        <td></td>
        <td></td>
        <td></td>
        <td class="tne"></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th class="tabhead">8:30 pm</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <br/>
  <?php include_once ("footer.inc");
  ?>
</body>
</html>
