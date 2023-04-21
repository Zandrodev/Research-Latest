<?php
include("connection.php");
 ?>
<!DOCTYPE html>
  <html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="Admin.css" rel="stylesheet">
  <script src="../myscript.js"></script>
  </head>
  <body>

    <form action="logout.php" method="POST">
            <button type="submit" class="logout">Logout</button>
          </form>
  <div id="mySidenav" class="sidenav">

    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&nbsp&#9776;</a>
    <a href="#dashsquare">Dashboard</a>
    <a href="#employee">Employees</a>
    <a href="Attendancepage.php">Attendance</a>

    <div class="square">
      </div>
    <p class="ETS">ETS.</p>
</div>
<div id="chet">
<div class="rectangle">
</div>
<h2 style="font-size:22px; position:fixed; margin-top: 1.3%;display: inline-block; transition: 3s; margin-left: 4%; color: Black; z-index: 3;
transition-delay: 1s;">	Admin</h2>
</div>
<div id="main">
  <span style="font-size:18px;cursor:pointer;color: white; width:1.9%; height: 4%; border-radius: 25px; position: absolute; top: 2.5%; left: 1%; background-color: black; padding: 1px;z-index: 2;" onclick="openNav()" >&nbsp&#9776;</span>
</div>
<div class= contai1ner>
  <div id= dashsquare>
    <div class = dashstruc>
    <p style= "position: absolute; top: 0%; left: 3%; font-size: 35px;" >Admin Dashboard</p>
    <p style= "position: absolute; top: 50%; left: 3%;" >Welcome back, Admin! Love to see you back.</p>
  </div>
  </div>
  <div id= employee>
      <p class = employee>Employee List</p>
    <div id="main">
      <span style="font-size:18px;cursor:pointer;color: white; width:1.9%; height: 4%; border-radius: 25px; position: absolute; top: 2%; left: 1%; background-color: black; padding: 1px;z-index: 2;" onclick="openNav()" >&nbsp&#9776;</span>
    </div>

    <div class= outer-wrapper>

      <label style= "position:absolute; top: 30%; left: 35.5%;">Search</label>
      <input type="text" id="myInput" onkeyup="filterTable()" placeholder="Search...">
      <input type="submit" class="submit" name="submit">

      <div class="table-wrapper">
      <table id= "content-table">
        <thead>
        <tr>
          <th>Employee</th>
          <th>UserID</th>
            <th>Department</th>
            <th>Status Today</th>
            <th>More Options</th>
          </tr>
        </thead>
      <?php
      include_once '../logindb.php';
       ?>
      <?php
      $sql = "SELECT * FROM Loginform;";
      $result = mysqli_query($data, $sql);
      $resultCheck = mysqli_num_rows($result,);

      if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
                echo "
                <tbody>

                <tr>
                <td>".$row['Name']."</td>
                 <td>".$row['UserID']."</td>
                 <td>".$row['Department']."</td>
                 <td>".$row['Status']."</td>
                 <td><a href = 'Message.php?Name=$row[Name]'><input type='submit' value='Message' class ='Message'></a>
                 <a href = 'delete.php?Name=$row[Name]'><input type='submit' value='Delete' class ='delete'> </a></td>
                 </tr>

                 </tbody>

              ";
        }
      }
      ?>
</div>
  </div>
</table>
  </form>
    <form action="Register.php" method="POST">
    <div id = "empregister" class= "register">
      <a href="javascript:void(0)" class="regtn" onclick="closeReg()">&#8592; Back to Employee List</a>
      <div class = circ>
      </div>
      <p style="height: 5%; width: 3%; position: absolute; left: 16%; top: 9.7%; background-color: none; color: white; border-radius: 30px; font-size: 42px;">&#43;</p>
      <h2 style="margin-left: 20%;">Adding New Employee </h2>
    <hr>
    <div>
    <label for="Name"><b>Full Name:</b></label>
    <input type="text" placeholder="" name="Name" id="Name" required>
  </div>
  <div>
    <label for="UserID"><b>UserID:</b></label>
    <input type="text" placeholder="" name="UserID" id="UserID" required>
</div>
<div>
    <label for="Psw"><b>Password:</b></label>
    <input type="text" placeholder="" name="Password" id="Password" required>
  </div>
  <div>
    <label for="Department"><b>Department:</b></label>
    <select name="Department" id="Department" style ="width:22.6%; padding: 3px; margin-bottom: 1%; border-style:solid; border-color: gray;">
    <option value="Teaching">Teaching</option>
    <option value="Non-Teaching">Non-Teaching</option>
    <option value="Maintenance">Maintenance</option>
  </select>
</div>
<div>
  <label for="Occupation"><b>Occupation:</b></label>
  <input type="text" placeholder="" name="Occupation" id="Occupation" required>
</div>
<div>
  <label for="Email"><b>Email Address:</b></label>
  <input type="text" placeholder="" name="Email" id="Email" required>
</div>
<div>
  <label for="Contact"><b>Contact #:</b></label>
  <input type="text" placeholder="" name="Contact" id="Contact" required>
</div>
    <hr>
    <button type="submit" class="registerbtn">Register</button>
  </div>
</form>
  <div id="reg">
    <span class="rega" onclick="openReg()" >&nbsp&#43; Add Employee</span>
  </div>
    </div>
  </div>
</div>

  </body>
  </html>
