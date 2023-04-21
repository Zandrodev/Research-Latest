<!DOCTYPE html>
  <html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="Admintry.css" rel="stylesheet">
  <script src="../myscript.js"></script>
  </head>
  <body>
    <div class = main-container>
          <h2>Employee List</h2>
        <div id="main">
          <span style="font-size:18px;cursor:pointer;color: white; width:1.9%; height: 4%; border-radius: 25px; position: absolute; top: 2%; left: 1%; background-color: black; padding: 1px;z-index: 2;" onclick="openNav()" >&nbsp&#9776;</span>
        </div>
          <div class="table-wrapper">
          <table class=content-table>
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
          $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <tbody>
                    <tr>
                    <td>".$row['Name']."</td>
                     <td>".$row['UserID']."</td>
                     <td>".$row['Department']."</td>
                     <td>Absent</td>
                     <td><a href = 'Message.php?Name=$row[Name]'><input type='submit' value='Message' class ='Message'></a>
                     <a href = 'delete.php?Name=$row[Name]'><input type='submit' value='Delete' class ='delete'> </a></td>
                     </tr>
                     </tbody>

                  ";
            }
          }
          ?>

    </div>
    </table>
      </div>
  </body>
</html>
