<section class="home-section">
  <div class="text">
    <div class="present">
      <label for="attentable">Present</label>
      <label for="date-picker">Select a date:</label>
      <input type="date" id="date-picker" onchange="filterAttendance()">
      <table id="attentable">
        <thead>
          <tr>
            <th>Name</th>
            <th>UserID</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
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

            // Retrieve attendance data from the database
            $sql = "SELECT * FROM attendance WHERE Status = 'present'";
            $result = $conn->query($sql);

            // Display attendance data in a table format
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "
                  <tr>
                    <td>".$row["Name"]."</td>
                    <td>".$row["UserID"]."</td>
                    <td>".$row["Date"]."</td>
                    <td>".$row["Time"]."</td>
                    <td>".$row["Status"]."</td>
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

    <div class="absent">
      <label for="absent-table">Absent</label>
      <table id="absent-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>UserID</th>
            <th>Time</th>
            <th>Status</th>
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

            // Retrieve attendance data from the database
            $sql1 = "SELECT * FROM attendance WHERE Status = 'absent'";
            $result1 = $conn->query($sql1);

            // Display attendance data in a table format
            if ($result1->num_rows > 0) {
              while($row1 = $result1->fetch_assoc()) {
                echo "
                  <tr>
                    <td>".$row1["Name"]."</td>
                    <td>".$row1["UserID"]."</td>
                    <td>".$row1["Time"]."</td>
                    <td>".$row1["Status"]."</td>
                  </tr>
                ";
              }
            } else {
              echo "<tr><td colspan='4'>No attendance records found.</td></tr>";
            }
