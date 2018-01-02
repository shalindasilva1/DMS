<!DOCTYPE html>
<html>
<head>
<title>index</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
</head>
<body>

 

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>D M S</b> </a>
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button"><b>ALERT FEED</b></a>
      <a href="#about" class="w3-bar-item w3-button"><b>MAP</b></a>
      <a href="#contact" class="w3-bar-item w3-button"><b>ABOUT US</b></a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="img/header.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-hide-small w3-text-light-grey"><b>WELCOME TO THE</b></span><br><span class="w3-padding w3-black w3-opacity-min"><b>D M S</b></span> </h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><b>ALERT FEED</b></h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
        <a href="news.php"> <img src="img/house5.jpg" alt="House" style="width:100%"> </a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
        <a href="news.php"><img src="img/house2.jpg" alt="House" style="width:100%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
         <a href="news.php"><img src="img/house3.jpg" alt="House" style="width:100%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
        <a href="news.php"><img src="img/house4.jpg" alt="House" style="width:100%"></a>
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
        <a href="news.php"><img src="img/house2.jpg" alt="House" style="width:99%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
        <a href="news.php"><img src="img/house5.jpg" alt="House" style="width:99%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
        <a href="news.php"><img src="img/house4.jpg" alt="House" style="width:99%"></a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
        <a href="news.php"><img src="img/house3.jpg" alt="House" style="width:99%"></a>
      </div>
    </div>
  </div>

<!-- map -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><b>MAP</b></h3>


  
<!-- Google Map -->
  <div id="googleMap" class="w3-grayscale" style="width:100%;height:450px;"></div>

<!-- Add Google Maps -->
  <script>
  function myMap()
    {
      myCenter=new google.maps.LatLng(6.927079, 79.861243);
      var mapOptions= {
      center:myCenter,
      zoom:12, scrollwheel: true, draggable: true,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
  }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiRwdI8SWZScFVr2Gxf-w19J5WoBUyaO8&callback=myMap"></script>
 
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><b>ABOUT US</b></h3>
    <p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.</b>
    </p>
  </div>

  <div class="w3-row-padding w3-grayscale">
    
    
    <div class="w3-col l2 m6 w3-margin-bottom">
      <img src="img/team1.jpg" alt="Mike" style="width:100%">
      <h3><b>Shalinda Silva</b></h3>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    </div>
    <div class="w3-col l2 m6 w3-margin-bottom">
      <img src="img/team2.jpg" alt="Mike" style="width:100%">
      <h3><b>Dakshi Polduwa</b></h3>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    </div>
    <div class="w3-col l2 m6 w3-margin-bottom">
      <img src="img/team3.jpg" alt="Mike" style="width:100%">
      <h3><b>Prabath Dinusha</b></h3>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    </div>
    <div class="w3-col l2 m6 w3-margin-bottom">
      <img src="img/team4.jpg" alt="Mike" style="width:100%">
      <h3><b>Binu Pawani</b></h3>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    </div>
    <div class="w3-col l2 m6 w3-margin-bottom">
      <img src="img/team5.jpg" alt="Mike" style="width:100%">
      <h3><b>Madhu Peris</b></h3>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
    </div> 
  
<!-- End page content -->
</div>



<?php 
  include 'class/post.php';

  $post = new post();
  $post->getLocation();
?>



</body>
</html>
