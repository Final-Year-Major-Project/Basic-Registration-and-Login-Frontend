<?php 
    require_once('adminOperation.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css_stylesheets/login.css">
  <title>Admin Login</title>
</head>
<body>
  <div class="head">
    <h1 class="headline">Online Exam System</h1>
    <div class="nav">
      <a href="../index.php"><i id="home-icon" class="fa fa-home"></i></a>
      <a class="home" href="../index.php">Home</a> 
    </div>
  </div>
  <div class="user">
    <h1>Welcome To Admin Login Section</h1>
  </div>
  <div class="container">
    <form action="result.php" autocomplete="off" method="POST"> 
    
        <label><b>Admin ID</b></label> &nbsp;&nbsp;&nbsp;
        <input type="text" placeholder="Enter Username" name="ad_id" required> <br> 

        <label><b>Password</b></label> &nbsp;&nbsp;&nbsp;
        <input type="password" placeholder="Enter Password" name="ad_pswd" require> <br>

        <button name="admin_login">Login</button>

  </form>
  </div>
</body>
</html>
