  <!DOCTYPE html>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="Employee.css" rel="stylesheet">
    <script src="myscript.js"></script>
    </head>
    <body>

      <form action="logout.php" method="POST">
              <button type="submit" class="logout">Logout</button>
            </form>
    <div id="mySidenav" class="sidenav">

      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="atten.php">Attendance</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
      <div class="square">
        </div>
      <p style="font-size:20px; color: black; overflow-x: hidden;
      transition: 0.5s; position: absolute; top: 0.5%; left: 15%;">
      <?php
        session_start();
        echo "Hi, " .$_SESSION['UserID'];
        echo "Hi, " .$_SESSION['Name']
        ?></p>
</div>
<div id="chet">
  <div class="rectangle">
    <div class="square1">
      <p style="font-size:20px; color: white; overflow-x: hidden;
      transition: 0.5s; text-align: center;">
      <?php
        echo "" .$_SESSION['UserID'];
        ?></p>
      </div>
  </div>
<h2 style="font-size:22px; position:relative; margin-top: 0%;display: inline-block; transition: 3s; margin-left: 5%; color: white;
  transition-delay: 1s;">Performance Tracking System</h2>
</div>
<div id="main">
    <span style="font-size:25px;cursor:pointer; width:3.7%; height: 6%; position: absolute; top: 1%; background-color: orange; padding: 1px;" onclick="openNav()" >&nbsp&nbsp&#9776;</span>
  </div>

    </body>
    </html>
