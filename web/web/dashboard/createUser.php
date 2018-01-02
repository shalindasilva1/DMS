  <html>
  <head>
  	<title>
  		Admin panel
  	</title>
    <link rel="stylesheet" type="text/css" href="styles/css.css">
  </head>
  <body>
  	<div id="header">
  		<center>
  		<img src= "admin1.png" alt= "adminLogo" id= "adminLogo"><br><br>
  		<b>Welcome Admin!</b>

  		</center>

  	</div>

  	<div id="sidebar">
  		<ul>
  			<li class='selected'><a href="createUser.php"> Create Super User </a></li>
  			<li><a href="edituser.php"> Edit Super User </a></li>
  			<li><a href="add.php"> Add Post </a></li>
  			<li><a href="editpost.php"> Edit Post </a></li>

  		</ul>	

  		
  		
  	</div>

  	<div id="sidebar2">
      <div style="margin:30px">
  		<form action="create.php" method="POST" ><br>
          User Name:<br> <input type="text" name="username"><br>
          First Name:<br> <input type="text" name="fname" ><br>
          Last Name:<br> <input type="text" name="lname"><br>
          Street:<br> <input type="text" name="street"><br>
          City:<br> <input type="text" name="city"><br>
          State:<br> <input type="text" name="state"><br>
          Password:<br> <input type="password" name="pass"><br>
          Tell:<br> <input type="text" name="tell"><br>
          Position:<br> <input type="text" name="position"><br>
          <input type="submit" name="submit" value="Send Info" >


       </form>
  		</div>
  	</div>


  </body>
  </html>