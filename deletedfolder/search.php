<?php
$con = new PDO("mysql:host=localhost;dbname=demologin",'root','');
 if(isset($_POST["submit"])){
   $str = $_POST["string"];
   $sth = $con->prepare("SELECT * FROM `loginform` WHERE userID = '$str'");

   $sth->setFetchMode(PDO:: FETCH_OBJ);
   $sth->execute();

   if($row = $sth->fetch())
  {
    ?>
    <br><br><br>
    <table>
      <tr>
        <th>Name</th>
        <th>UserID</th>
        <th>Department</th>
        <th>Occupation</th>
        <th>Email</th>
        <th>Contacts</th>
      </tr>
      <tr>
        <td><?php echo $row->Name; ?></td>
        <td><?php echo $row->UserID; ?></td>
        <td><?php echo $row->Department; ?></td>
        <td><?php echo $row->Occupation; ?></td>
        <td><?php echo $row->Email; ?></td>
        <td><?php echo $row->Contact; ?></td>
      </tr>
    </table>
    <?php
  }
else{
echo "Name doesnt exist";
}
 }
 ?>
