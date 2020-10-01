<?php 
    require_once("studentOperation.php");

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    if(!$_SESSION['isstudentloggedin']) {
      session_reset();

      session_destroy();
      header("location: studentlogin.php");
      exit;
    }
    if(isset($_POST['s_logout'])) {
        session_reset();

        session_destroy();
        header("location: ../index.php");
        exit;
    }
    if(isset($_POST['view_Sprofile'])) {
      header("location: studentProfile.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css_stylesheets/userHome.css">
  <title>Home</title>
</head>
<body>
  
  <div class="head">
    <h1 class="headline">Online Exam System</h1>
    <div class="nav">
        <form action="" method="post">
          <a href=""><i id="home-icon" class="fa fa-home"></i></a>
          <input class="profile" type="submit" name="view_Sprofile" value="Profile" >
          <input class="logout" type="submit" name="s_logout" value="Log Out">
        </form>
    </div>
  </div>
        
  <div class="user">
    <h1>Welcome <?php echo $_SESSION['First_Name'];?></h1>
  </div>

  <div class="row" >
    <div class="section">
        <a href="">
          <div class="column">
            <h2 class="col-title">New Test <br> Registration</h2>
          </div>
        </a>
    </div>
    <div class="section">
        <a href="">
          <div class="column">
            <h2 class="col-title">Upcoming <br> Tests</h2>
          </div>
        </a>
    </div>
    <div class="section">
        <a href="">
          <div class="column">
            <h2 class="col-title">Compleated <br> Tests Results</h2>
          </div>
        </a>
    </div>
  </div>
</body>
</html>
