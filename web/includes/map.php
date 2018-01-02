    <?php

    require_once 'init/dbconnection.php';
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

    $sql = "SELECT * FROM post";
    $result = $conn->query($sql);

    echo"
    <!-- map -->
    <div class=\"w3-container w3-padding-32\" id=\"about\">
        <h3 class=\"w3-border-bottom w3-border-light-grey w3-padding-16\"><b>MAP</b></h3>



        <!-- Google Map -->
        <div id=\"googleMap\" class=\"w3-grayscale\" style=\"width:100%;height:650px;\"></div>

            <!-- Add Google Maps -->
                <script>
                function myMap()
                {
                    var sl = {lat: 7.8731, lng: 80.7718};
                    var mapOptions= {
                        center:sl,
                        zoom:7, scrollwheel: true, draggable: true,
                        mapTypeId:google.maps.MapTypeId.ROADMAP
                };
                var map=new google.maps.Map(document.getElementById(\"googleMap\"),mapOptions);";

                $x=0;
                while($row = $result->fetch_assoc()){
                    echo "var marker".$x." = new google.maps.Marker({
                    position: {lat: ".$row["Latitude"].", lng: ".$row["Longitude"]."},
                    });
                    marker".$x.".setMap(map);";
                $x=$x+1;
                }
                echo"
                }
                </script>
                <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAiRwdI8SWZScFVr2Gxf-w19J5WoBUyaO8&callback=myMap\"></script>
    </div>";

    ?>