  <html>
  <head>
  	<title>
  		Admin panel  sshhaalliinnddaa
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
  			<li><a href="index.php"> Create Super User </a></li>
  			<li><a href="edituser.php"> Edit Super User </a></li>
  			<li class='selected'><a href="add.php"> Add Post </a></li>
  			<li><a href="editpost.php"> Edit Post </a></li>

  		</ul>	

  		
  		
  	</div>

  	<div id="sidebar2">
      <div style="margin:30px">

  		<form action="create.php" method="POST" ><br>
          Title:<br> <input type="text" name="username"><br>
          Discription:<br> <textarea>Some text...</textarea><br>
                    Longitude:<br> <input type="text" name="long"><br>
          Latitude::<br> <input type="text" name="lat"><br>
          <input type="submit" name="submit" value="Send Info" >


       </form>
  		</div>
  	</div>


  </body>
  </html>
