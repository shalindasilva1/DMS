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
     <li><a href="createUser.php"> Create Super User </a></li>
     <li><a href="edituser.php"> Edit Super User </a></li>
     <li><a href="add.php"> Add Post </a></li>
     <li class='selected'><a href="editpost.php"> Edit Post </a></li>

   </ul>	

   
   
 </div>

 <div id="sidebar2">
  <button id="myBtn">Open Modal</button>
  <div style="margin:30px">

    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
          <h2>Edit Post --postname--</h2>
        </div>
        <div class="modal-body">
          <form action="create.php" method="POST" ><br>
            Title:<br> <input type="text" name="username"><br>
            Discription:<br> <textarea>Some text...</textarea><br>
            Longitude:<br> <input type="text" name="long"><br>
            Latitude::<br> <input type="text" name="lat"><br>
            <input type="submit" name="submit" value="Send Info" >


          </form>
        </div>
      </div>

    </div>
  </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>