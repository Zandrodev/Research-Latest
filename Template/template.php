<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "demologin";

$conn = mysqli_connect($host,$username,$password,$dbname);

// Get the user ID from the URL parameter
$UserID = $_GET['UserID'];

// Query the database to get the user information
$query = "SELECT * FROM loginform WHERE UserID = $UserID";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Display the user information
?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="template.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <div class="logo_name">
          <img class="Images" src="../img/est-transparent.png">
      </div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="Employeelist.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Employees List</span>
       </a>
       <span class="tooltip">User</span>
     </li>
     <li>
       <a href="Attendance.php">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Attendance</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>
     <li>
       <a href="Task-Check.php">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Task Check</span>
       </a>
       <span class="tooltip">Analytics</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Filing Leave</span>
       </a>
       <span class="tooltip">Files</span>
     </li>
     <li>

     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Settings</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <!--<img src="profile.jpg" alt="profileImg">-->
           <div class="name_job">
             <div class="name">Admin
           </div>
         </div>
         <form action="logout.php" method="POST">

         <button type="submit" class='bx bx-log-out' id="log_out" ></i>
           </form>
     </li>
    </ul>
  </div>
  <div class ="bg">
  <div class="navbar">
  <div class="pic">
          <img class="pic" src="../img/est-transparent.png">
      </div>
  <div class="dropdown">
    <button class="dropbtn">  
      <i class="bx bx-menu"></i>
    </button>
    <div class="dropdown-content">
    <a href="employeelist.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Employees List</span>
</a>
<a href="atdevelop.php">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Attendance</span>
       </a>
       <a href="#">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Filing Leave</span>
       </a>
    </div>
  </div>
</div>
    <div class="imgbg">
  </div>
  <section class="home-section">
  <div class="text">
</div>
  </section>
</div>
  <script src="scripttest.js"></script>
</body>
</html>
