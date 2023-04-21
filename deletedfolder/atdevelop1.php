<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="atdevelop.css">
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
    <div class ="head">
      <div class="hghead">
      <h2>Attendance Record</h2>
    </div>
  </div>
  <input type="text" id="searchs" placeholder="Search...">
    <div class="form">
    <form method="POST">
    <input type="checkbox" name="departments[]" value="teaching"> Teaching
<input type="checkbox" name="departments[]" value="non-teaching"> Non-teaching
<input type="checkbox" name="departments[]" value="maintenance"> Maintenance
<button type="submit">filter</button>
</form>
</div>
    <div class ="sort">
    <label for="date-picker">Select a date:</label>
    <input type="date" id="date-picker" onchange="filterAttendance()">
  </div>
    <div class="present">
      <label for="attentable">Present</label>
      <div class="present-wrapper">
      <table id="attentable">
        <thead>
          <tr>
            <th>Name</th>
            <th>UserID</th>
            <th>Department</th>
            <th>Date</th>
            <th>Time</th>

          </tr>
        </thead>
        <tbody id="attendance-body">
          <?php
            // Connect to the database
            $host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'demologin';
$conn = new mysqli($host, $user, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve attendance data from the database based on the selected department(s)
$departments = isset($_POST['departments']) ? $_POST['departments'] : array();
$sql = "SELECT * FROM attendance WHERE Status = 'present'";
if (!empty($departments)) {
    $sql .= " AND (";
    foreach ($departments as $department) {
        $sql .= "Department = '" . $department . "' OR ";
    }
    $sql = rtrim($sql, " OR ");
    $sql .= ")";
}
$sql .= " ORDER BY Date DESC";

$result = $conn->query($sql);

// Display attendance data in a table format
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "
            <tr>
                <td>" . $row["Name"] . "</td>
                <td>" . $row["UserID"] . "</td>
                <td>" . $row["Department"] . "</td>
                <td>" . $row["Date"] . "</td>
                <td>" . $row["Time"] . "</td>
            </tr>
        ";
    }
} else {
    echo "<tr><td colspan='5'>No attendance records found.</td></tr>";
}

$conn->close();
          ?>
        </tbody>
      </table>
      </div>
    </div>

    <div class="absent">
      <label for="absent-table">Absent</label>
      <div class ="absent-wrapper">
      <table id="absent-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>UserID</th>
            <th>Department</th>
            <th>Date</th>
            <th>Time</th>
          </tr>
        </thead>
        <tbody id="absent-body">
          <?php
            // Connect to the database
            $host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'demologin';
$conn = new mysqli($host, $user, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve attendance data from the database based on the selected department(s)
$departments = isset($_POST['departments']) ? $_POST['departments'] : array();
$sql1 = "SELECT * FROM attendance WHERE Status = 'absent'";
if (!empty($departments)) {
    $sql1 .= " AND (";
    foreach ($departments as $department) {
        $sql1 .= "Department = '" . $department . "' OR ";
    }
    $sql1 = rtrim($sql1, " OR ");
    $sql1 .= ")";
}
$sql1 .= " ORDER BY Date DESC";

$result1 = $conn->query($sql1);

// Display attendance data in a table format
if ($result1->num_rows > 0) {
    while ($row1 = $result1->fetch_assoc()) {
        echo "
            <tr>
                <td>" . $row1["Name"] . "</td>
                <td>" . $row1["UserID"] . "</td>
                <td>" . $row1["Department"] . "</td>
                <td>" . $row1["Date"] . "</td>
                <td>" . $row1["Time"] . "</td>
            </tr>
        ";
    }
} else {
    echo "<tr><td colspan='5'>No attendance records found.</td></tr>";
}

$conn->close();
?>
</tbody>
</table>
</div>
</div>
</div>
  </section>
</div>
  <script src="scripttest.js"></script>
</body>
</html>
