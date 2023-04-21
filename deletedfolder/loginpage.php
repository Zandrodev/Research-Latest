<html>
<head>
<title>Login</title>
  <link href="login.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <script src="myscript.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Itim">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!--<div class="bg"><div class="bg"><img src="ManagementSystem\tabs\img\Both.png"></div></div>-->
<label for="menu-bar"><b>EST.</b></label>
<label for="title-bar"><b>Employee System Tracker</b></label>
  <div class="menu-bar">

  <ul>
    <div class="container">

      <form action="logindb.php" method="POST">
        <style>
        .error {
          background-color: none;
          color: red;
          width:15%;
          padding: 5px;
          position: absolute; top: 38%; left: 37.5%;
        }
        </style>
        <?php if (isset($_GET['error'])) { ?>
        <p class= "error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
        <div class="input-icons">
      <i class="fa fa-user icon"></i>
      <input type="text" placeholder="    Username" name="UserID" required>
<i class="fa fa-key icon"></i>
      <input type="password" placeholder="    Password" name="Password" required>
      <button type="submit" class="login">Login</button>
    </form>
    </div>

      <input type="checkbox" checked="checked" name="remember">
      <label for="chk">Remember Me</label>
    <div class="container" style="background-color:">
      <span class="psw">Forgot your password? <a href="forget.html">Get it back!</a></span>

    </div>
</ul>
</div>
</body>
</html>
