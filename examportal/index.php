
<?php 
  require_once('./server/db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css_stylesheets/Home.css">
  <title>Home</title>
</head>
<body>
  
  <div class="head">
    <h1 class="headline">Online Exam System</h1>
    <div class="nav">
        <a href="index.php"><i id="home-icon" class="fa fa-home"></i></a>
        <a href="./Teacher/teacherlogin.php"><input class="login" type="button" value="Teacher Login" ></a>  
        <a href="./student/studentlogin.php"><input class="login" type="button" value="Student Login" ></a>
    </div>
  </div>

  <div class="user">
    <h1>New User?</h1>
    <a href="studentRegistration.php"><input class="Register" type="button" value="Student Registration" style="margin-right: 10px;"></a>
    <a href="teacherRegistration.php"><input class="Register" type="button" value="Teacher Registration" style="margin-left: 10px;"></a>
  </div>
</body>
</html>