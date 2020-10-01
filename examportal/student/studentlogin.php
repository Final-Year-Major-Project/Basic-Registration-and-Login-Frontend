<?php
    require_once('studentOperation.php');
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css_stylesheets/login.css">
  <title>Student Login</title>
</head>
<body>
  <div class="head">
    <h1 class="headline">Online Exam System</h1>
    <div class="nav">
      <a href="../index.php"><i id="home-icon" class="fa fa-home"></i></a>
      <a class="home" href="../index.php">Home</a> 
      <a href="../studentRegistration.php"><input class="signup" type="button" value="Sign Up"></a>
    </div>
  </div>
  <div class="user">
    <h1>Student Login</h1>
  </div>
  <form action="" method="POST" autocomplete="off"> 
  
    <div class="container"> 

    <label><b>GR Number</b></label> 
      <input type="text" placeholder="Enter GR Number" name="S_Gr_No_check" required> <br>

      <label><b>Email</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" placeholder="Enter Your Email" name="S_Email_check" required> <br> 

      <label><b>Password</b></label> &nbsp;&nbsp;&nbsp;
      <input type="password" name="S_pswd_check"  placeholder="Enter Password" required> <br>

      <button name="S_login">Login</button>

    </div>

  </form>
</body>
</html>
