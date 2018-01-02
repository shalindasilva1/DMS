<?php
include ('class/dbclass.php');
$db = new dbclass();
$db->connect;
class post{
	public function getLocation(){
		if ($db->conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM post";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo " - Latitude: " . $row["Longitude"]. ", " . $row["Latitude"]. "<br>";
		    }
		} else {
		    echo "0 results";
		}
		$conn->close();
	}
}
?>