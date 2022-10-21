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
  $page = "enhancements_page";
  include_once ("header.inc");
   ?>
   <div id="bg-img"></div>
  <article class="main15">
    <h1>Enhancements</h1>
    <hr class="afthd">
      <p>Below are list of enhancements used in the website which implement features/techniques that go beyond the specified requirements.
      </p>
      <ul>
        <li><span>Image maps</span>
          <ul>
            <li>The HTML map tag defines an image map. An image map is an image with clickable areas. The areas are defined with one or more area tags.</li>
            <li>The image is inserted using the img tag. The map element is to create an image map, and is linked to the image by using the required name attribute</li>
            <li>URL: <a href="https://www.w3schools.com/html/html_images_imagemap.asp" class="normal">Image map</a></li>
            <li> <a href="index.html#main3" class="normal"> Click me</a> </li>
          </ul>
        </li>
        <li><span>Responsive design</span>
          <ul>
            <li>It is used to create responsive design for mobile/tablets.</li>
            <li>U need media query in CSS.</li>
          </ul>
        </li>
        <li><span>Pseudo class elements in footer</span>
          <ul>
            <li>It is used to style specified parts of an element.</li>
            <li>U need selectors like :last-child</li>
            <li> <a href="#ft" class="normal">Click me</a> </li>
          </ul>
        </li>
        <li><span>Icons on nav bars </span>
          <ul>
            <li>It shows a responsive navbar with icons along with the names.</li>
            <li>U need to include a link to https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css</li>
            <li> URL : <a href="https://www.w3schools.com/howto/howto_css_navbar_icon.asp" class="normal">Nav bars</a> </li>
            <li>Header of every page includes these.</li>
          </ul>
        </li>
        <li><span>Side floating nav bars</span>
          <ul>
            <li>It creates hoverable side navigation buttons with CSS</li>
            <li>U need div tag with styling in CSS.</li>
            <li>URL : <a href="https://www.w3schools.com/howto/howto_css_sidenav_buttons.asp" class="normal">Floating Nav bars</a> </li>
            <li><a href="product.html" class="normal"> Click me</a> </li>
          </ul>
        </li>
      </ul>
    <hr class="afthd">

  </article>

  <?php include_once ("footer.inc");
  ?>
</body>
</html>
