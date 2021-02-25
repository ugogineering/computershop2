<?php

?>
<!DOCTYPE html>
<html>
<title>Welcome to Cmart from Caseray Solutions - a demo website.</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="We help businesses in Nigeria grow through innovative use of digital technologies to market and advertise to their target audience and grow their customer base.">

<meta name="Keywords" content="Demo website, demonstration website, mobile-friendly web design, computer shop">

<meta name="Classification" content="Digital Marketing, Online Advertising, Internet marketing">

<meta name="distribution" content="Global" />
<meta name="rating" content="General" />
<meta name="robots" content="index, follow" />
<meta name="revisit-after" content="21 days" />
<meta name="creator" content="Caseray Solutions" />
<meta name="publisher" content="Caseray Solutions Limited (www.caseraysolutions.com)" />
<link rel="stylesheet" href="images/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
}
.bgimg {
    background-position: center;
    background-size: cover;
    background-image: url("images/001tech_04.jpg");
    min-height: 75%;
}
.menu {
    display: none;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="images/responsiveslides.min.js"></script>
<script src="images/responsiveslides.css"></script>
<script src="images/responsiveslides.js"></script>
<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>

<link href="images/responsiveslides.css" rel="stylesheet" type="text/css">
<body>


<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#software" class="w3-button w3-block w3-black">SOFTWARE</a>
    </div>
    <div class="w3-col s3">
      <a href="#computer" class="w3-button w3-block w3-black">COMPUTER</a>
    </div>
    <div class="w3-col s3">
      <a href="#contact" class="w3-button w3-block w3-black">CONTACT</a>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag"><a href="#" target="_blank">Our blog</a></span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">Computer<br>Shop</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">Computer Village, Ikeja, Lagos</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-large">

<!-- About Container -->
<div class="w3-container" id="">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT COMPUTER SHOP</span></h5>
    <p>At Computer Shop we have computer hardware and software products, and related gadgets and accessories from Computer Village, Ikeja, Lagos, Nigeria.</p>
    <p>At our shop you will find personal computers, laptop computers, desktop computers, projectors, antivirus software, desktop publishing software, printers, keyboards, mouse, headphones, storage drives and more. </p>
    <p>We stock brand new and fairly used computers and printers at an affordable price.</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"We go the extra mile to satisfy our customers because that is the recipe for business success in Nigeria.".</i></p>
      <p>Managing Director: Computer Shop</p>
    </div>
    <img src="images/001tech_01.png" style="width:100%;max-width:1000px" class="w3-margin-top" alt="We equip computer laboratories in Nigeria">
    <p><strong>Opening hours:</strong> Monday - Friday from 9am to 5pm.</p>
    <p><strong>Address:</strong>Computer Village, Ikeja, Lagos</p>

  </div>
</div>

<!-- Computer Container -->
<div class="w3-container" id="software">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">SOFTWARE</span></h5>
    <p>We stock software such as:</p>
    <ul>
    <li>
      <p>Microsoft Office - Word, PowerPoint, Access, Excel;</p></li>
    <li>
      <p>Antivirus software;</p>
    </li>
    <li>
      <p>Enterprise Resource Planning (ERP);</p>
    </li>
    <li>
      <p>Office 365.</p>
    </li>
    </ul>

    <ul class="rslides">
    <li><img src="images/640_360/01.jpg"></li>
    <li><img src="images/640_360/02.jpg"></li>
    <li><img src="images/640_360/03.jpg"></li>
    <li><img src="images/640_360/04.jpg"></li>
    <li><img src="images/640_360/05.jpg"></li>
    <li><img src="images/640_360/06.jpg"></li>
  </ul>

  </div>


</div>

<!-- Menu Container -->
<div class="w3-container" id="computer">
  <div class="w3-content" style="max-width:700px">

    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">COMPUTER</span></h5>

    <div class="w3-row w3-center w3-card-2 w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Hardware');" id="myLink">
        <div class="w3-col s6 tablink">Hardware</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Accessories');">
        <div class="w3-col s6 tablink">Accesories</div>
      </a>
    </div>

    <div id="Hardware" class="w3-container menu w3-padding-48 w3-card-2">
    <h5>Laptop Computers</h5>
      <p class="w3-text-grey">We stock laptop computers from a range of brands that include HP, Dell, Lenovo, Acer and they all come with warranty.</p>
      <h5>Computers</h5>
      <p class="w3-text-grey">We stock Desktop Computers from a range of brands that include Dell, HP, LG, Lenovo and Samsung</p>



      <h5>Servers</h5>
      <p class="w3-text-grey">We have Windows servers of varying specifications for various requirements </p>

      <h5>Projectors</h5>
      <p class="w3-text-grey">We have powerful projectors from HP, Acer and Samsung</p>


    </div>

    <div id="Accessories" class="w3-container menu w3-padding-48 w3-card-2">
      <h5>Printers</h5>
      <p class="w3-text-grey">We have Deskjet, LaserJet and OfficeJet printers from HP, Canon and Toshiba</p>

      <h5>Storage Drives</h5>
      <p class="w3-text-grey">We have External Hard Disk Drives, USB Flash Drives from brands such as Seagate, LG, WD Elements and more</p>

      <h5>Headphones</h5>
      <p class="w3-text-grey">We have beautiful wtereo headphones, wired and wireles headphones</p>

      <h5>Keyboards</h5>
      <p class="w3-text-grey">We have wired and wireless keyboards</p>

      <h5>Mouse</h5>
      <p class="w3-text-grey">We have wired, wireless mouse for laptops and desktop computers</p>
    </div>
    <img src="images/001tech_01.png" style="width:100%;max-width:1000px" class="w3-margin-top" alt="We equip computer laboratories in Nigeria">
  </div>

</div>

<!-- Contact/Area Container -->
<div class="w3-container" id="contact" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHERE TO FIND US</span></h5>
    <p>Find us at: Computer Village, Ikeja, Lagos.</p>
    <div id="googleMap" class="w3-sepia" style="width:100%;height:400px;"></div>
    <p><span class="w3-tag">CONTACT US</span> Send us a message and we promise to respond as soon as we can.</p>


    <form action="contact-report.php" method="post">
        <p>
          <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Your full name" required name="fullname">
        </p>
        <p>
          <input class="w3-input w3-padding-16 w3-border" type="email" placeholder="Your email..." required name="email">
        </p>
        <p>
          <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Your phone number..." required name="phone">
        </p>
         <p>
          <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Company or organisation you work for..." required name="company">
        </p>
        <p>
          <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Your message.." required name="message">
        </p>
        <label for="captcha">Please Enter image text in next field: <img src="computershop_captcha.php"></label>
        <br>
        <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Image text.." maxlength="5" required name="captcha">
        <br>
        <br>
        <p>
          <button class="w3-button w3-ycn-blue" type="submit">SEND MESSAGE</button>
        </p>
      </form>
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->


<div class="col-6 col-m-6 footerBlack">

    Computer Shop &copy; 2021
</div>

    <div class="col-6 col-m-6 footerBlack">

    site design by <a href="https://caseray.com.ng" class="text-green" title="Website Design by Caseray Solutions" target="_blank">Caseray Solutions</a>

</div>



<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(6.594602, 3.338423);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YourKeyHere"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
