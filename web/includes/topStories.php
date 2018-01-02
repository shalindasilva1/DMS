<?php
require_once 'init/dbconnection.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM post";
$result = $conn->query($sql);
$x=8;
    while ($x>0) {
        // output data of each row

        while($row = $result->fetch_assoc()) {
                echo
                    "<div class=\"w3-col l3 m6 w3-margin-bottom\">
                        <div class=\"w3-display-container\">
                            <div class=\"w3-display-topleft w3-black w3-padding\">". $row["post titile"] ."</div>
                            <a href=\"news.php?post_id=".$row["post id"]."\"> <img src=\"".$row["img_path"]."\" alt=\"House\" style=\"width:100%\"> </a>
                            
                        </div>
                    </div>";
                    break;
        }
    $x=$x-1;
    }
?>