<!DOCTYPE html>
<html>
<title>index</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<body>

  <div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="index.php#home" class="w3-bar-item w3-button"><b>D M S</b> </a>
    <div class="w3-right w3-hide-small">
      <a href="index.php#projects" class="w3-bar-item w3-button"><b>ALERT FEED</b></a>
      <a href="index.php#about" class="w3-bar-item w3-button"><b>MAP</b></a>
      <a href="index.php#contact" class="w3-bar-item w3-button"><b>ABOUT US<b></a>
    </div>
  </div>
</div>


  <div class="w3-content w3-padding" style="max-width:1564px">
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><b>Summer House</b></h3>
  </div>

  
    <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <a href="news.php"> <img src="img/house5.jpg" alt="House" style="width:250%"> </a>
      </div>
    </div>
     <div class="w3-container w3-padding-32" id="contact">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>
  </div>

    
  <!-- Google Map -->

  <div id="googleMap" class="w3-grayscale" style="width:100%;height:450px;"></div>
  <!-- Add Google Maps -->
  <script>
  function myMap()
  {
  myCenter=new google.maps.LatLng(6.927079, 79.861243);
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
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiRwdI8SWZScFVr2Gxf-w19J5WoBUyaO8&callback=myMap"></script>
  
</div>



</body>
</html>