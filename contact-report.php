<?php
session_start();
$page_count;

?>
<!DOCTYPE html>
<html>
<title>Cmart from Caseray Solutions</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74701440-1', 'auto');
  ga('send', 'pageview');

</script>
<link href="images/responsiveslides.css" rel="stylesheet" type="text/css">
<body>


<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="index.php#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="index.php#software" class="w3-button w3-block w3-black">SOFTWARE</a>
    </div>
    <div class="w3-col s3">
      <a href="index.php#computer" class="w3-button w3-block w3-black">COMPUTER</a>
    </div>
    <div class="w3-col s3">
      <a href="index.php#contact" class="w3-button w3-block w3-black">CONTACT</a>
    </div>
  </div>
</div>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-large">

<!-- Computer Container -->
<div class="w3-container" id="software">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">CONTACT US</span></h5>
    <?php
if(isset($_POST["captcha"])&& $_POST["captcha"] != "" && $_SESSION["code"] == $_POST["captcha"]) {
	// Correct captcha code has been entered. Process data!

	$message = $_POST['message'];
	$email = $_POST['email'];
	// $ownermail = "ugo@caseray.com.ng";


	$mailassist = "webmailassist@gmail.com";

	$fullname = $_POST['fullname'];
	$company = $_POST['company'];

	$phone = $_POST['phone'];


		$headers = "From: Client Name <info@caseray.com.ng>";

		$mailmessage = "Message:	$message\r\n
					Sender Details:\r\n
					Name: 	$fullname\r\n

					Company/Organisation: $company\r\n

					Email: 	$email\r\n
					Telephone: $phone\r\n";


		// $mail = mail($ownermail,  "message from Client Name $fullname $email $company", $mailmessage, $headers);

		$mail = mail($mailassist,  "message from Client Name $fullname $email $company", $mailmessage, $headers);


		$mail = mail($email,  "A copy of the message you submitted at www.caseray.com.ng", $mailmessage, $headers);

		if($mail){
			echo("<p align=\"justify\"><strong> Thank you " . "$fullname" . " ". "Your message has been received.
			<br>A copy of your message was also sent to $email</strong></p>");

		} else {
			echo("<p align=\"justify\">Error sending your message </p>");
			echo("<p align=\"justify\"><b>Sorry " . "$fullname" . " $phone " .
		" There has been error sending your message </b></p>");
			echo("<p align=\"justify\"> " ."$mailmessage" . " </p>");
			echo("<p align=\"justify\"> " . "$email" . " </p>");
			echo("<p align=\"justify\"> " . "$fullname" . " </p>");

			echo("<p align=\"justify\"> <bold> <a href=\"index.php#contact\"><font color=\"#FF9933\"> Click here to try resending your message</font></a></bold></p>");
		}



} else {
  // Wrong captcha code was entered so display error message with link to go back to contact page.

  echo("<p align=\"justify\"> <bold> <a href=\"index.php#contact\"><font color=\"#FF9933\"> Sorry! you entered the wrong CAPTCHA CODE<br>
  Click here to try resending your message</font></a></bold></p>");

}

?>

  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->


<div class="col-6 col-m-6 footerBlack">Computer Shop &copy; 2021
</div>

    <div class="col-6 col-m-6 footerBlack">

    site design by <a href="https://caseray.com.ng" class="text-green" title="Website Design by Caseray Solutions" target="_blank">Caseray Solutions</a>

</div>



<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(6.5951, 3.3402);
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
