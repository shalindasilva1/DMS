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
       <li class='selected'><a href="edituser.php"> Edit Super User </a></li>
       <li><a href="add.php"> Add Post </a></li>
       <li><a href="editpost.php"> Edit Post </a></li>

     </ul>	



   </div>

   <div id="sidebar2">
      <div style="margin:30px">

      <table id="customers">
        <tr>
          <th>Full Name</th>
          <th>Possition</th>
          <th>Province</th>
          <th>Edtis</th>
        </tr>
        <tr>
          <td>Alfreds Futterkiste</td>
          <td>Maria Anders</td>
          <td>Germany</td>
          <td><button id="redButton">Delete</button><button id="greenButton">Promote</button></td>
        </tr>
        <tr>
          <td>Berglunds snabbköp</td>
          <td>Christina Berglund</td>
          <td>Sweden</td>
          <td><button id="redButton">Delete</button><button id="greenButton">Promote</button>
        </tr>
        <tr>
          <td>Centro comercial Moctezuma</td>
          <td>Francisco Chang</td>
          <td>Mexico</td>
          <td><button id="redButton">Delete</button><button id="greenButton">Promote</button>
        </tr>
        <tr>
          <td>Ernst Handel</td>
          <td>Roland Mendel</td>
          <td>Austria</td>
          <td><button id="redButton">Delete</button><button id="greenButton">Promote</button>
        </tr>
        <tr>
          <td>Island Trading</td>
          <td>Helen Bennett</td>
          <td>UK</td>
          <td><button id="redButton">Delete</button><button id="greenButton">Promote</button>
        </tr>
        <tr>
          <td>Königlich Essen</td>
          <td>Philip Cramer</td>
          <td>Germany</td>
          <td><button id="redButton">Delete</button><button id="greenButton">Promote</button>
        </tr>
        <tr>
          <td>Laughing Bacchus Winecellars</td>
          <td>Yoshi Tannamuri</td>
          <td>Canada</td>
          <td><button id="redButton">Delete</button><button id="greenButton">Promote</button>
        </tr>
        <tr>
          <td>Magazzini Alimentari Riuniti</td>
          <td>Giovanni Rovelli</td>
          <td>Italy</td>
          <td><button id="redButton">Delete</button><button id="greenButton">Promote</button>
        </tr>
        <tr>
          <td>North/South</td>
          <td>Simon Crowther</td>
          <td>UK</td>
          <td><button id="redButton">Delete</button><button id="greenButton">Promote</button>
        </tr>
        <tr>
          <td>Paris spécialités</td>
          <td>Marie Bertrand</td>
          <td>France</td>
          <td><button id="redButton">Delete</button><button id="greenButton">Promote</button>
        </tr>
      </table>
    </div>
  </div>


</body>
</html>