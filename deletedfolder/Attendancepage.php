<!DOCTYPE html>
  <html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="attendancerecord.css" rel="stylesheet">
  <script src="../myscript.js"></script>
  </head>
  <body>
    <div class = container>
    <div class="pres-tab"><label for="attentable">Present</label><table id = "attentable">
    <thead>
    <tr>
    <th>Name</th>
    <th>UserID</th>
    <th>Date</th>
    <th>Time</th>
    <th>Status</th>
    </tr>
    </thead>
<?php
// Connect to the database
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'demologin';

$conn = mysqli_connect($host, $user, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve attendance data
$sql = "SELECT * FROM attendance WHERE Status = 'present'";
$result = $conn->query($sql);
$sql1 = "SELECT * FROM attendance WHERE Status = 'absent'";
$result1 = $conn->query($sql1);

// Display attendance data in a table format
if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo "
    <tbody>
    <tr>
    <td>".$row["Name"]."</td>
    <td>".$row["UserID"]."</td>
    <td>".$row["Date"]."</td>
    <td>".$row["Time"]."</td>
    <td>".$row["Status"]."</td>
    </tr>
    </tbody>
    ";
  }
  echo "</table>
  </div>";

}
// Close the database connection
$conn->close();
?>
<div class="abs-tab"><label for="absent-table">Absent</label><table id = "absent-table">
  <thead>
  <tr>
  <th>Name</th>
  <th>UserID</th>
  <th>Date</th>
  <th>Time</th>
  <th>Status</th>
  </tr>
</thead>
<?php
if ($result1->num_rows > 0) {

    while($row1 = $result1->fetch_assoc()) {
      echo "
      <tbody>
      <tr>
      <td>".$row1["Name"]."</td>
      <td>".$row1["UserID"]."</td>
      <td>".$row1["Date"]."</td>
      <td>".$row1["Time"]."</td>
      <td>".$row1["Status"]."</td>
      </tr>
      </tbody>
      ";
      }
      echo "</table>
      </div>";

      }

?>

</div>
</body>
</html>
