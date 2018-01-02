<html>
<head>
	
	<?php

	error_reporting(0);

	include 'connection.php';
	$uname = $_POST['username'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$pass = $_POST['pass'];
	$tell = $_POST['tell'];
	$posi = $_POST['position'];
	$sql = "INSERT into data (user name, first name, last name, address 1, adress 2,adress 3, password, tell number, position) values('$uname','$fname','$lname','$street','$city','$state','$pass','$tell','$posi') ";

	if ($_POST['submit']){
		if (mysql_query($conn, $sql)) {

			echo "data added successfully";
		}
		else{
			echo "something went wrong";
		}
	}


	?>

</head>
<body>
	<form action="create.php" method="POST" >
		User Name: <input type="text" name="username">
		First Name: <input type="text" name="fname" >
		LAst Name: <input type="text" name="lname">
		Street: <input type="text" name="street">
		City: <input type="text" name="city">
		State: <input type="text" name="state">
		Password: <input type="password" name="pass">
		Tell: <input type="text" name="tell">
		Position: <input type="text" name="position">
		<input type="submit" name="submit" value="Send Info" >


	</form>

</body>

</html>