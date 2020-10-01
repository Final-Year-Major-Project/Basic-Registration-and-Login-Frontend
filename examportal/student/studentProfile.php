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
    if(isset($_POST['goto_home'])) {
        header("location: studentHome.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css_stylesheets/profile.css">
  <title>Home</title>
</head>
<body>
  
  <div class="head">
    <h1 class="headline">Online Exam System</h1>
    <div class="nav">
        <form method="post">
          <i id="home-icon" class="fa fa-home"></i>
          <input class="profile" name="goto_home" type="submit" value="Home" >
          <input class="logout" type="submit" name="s_logout" value="Log Out">
        </form>
    </div>
    <div class="container">
        <div class="top"></div>
        <img src="../css_stylesheets/images/profile.png" alt="">

        <hr>

        <table>
            <tr>
                <td><b>GR No::</b></td>
                <td><?php echo $_SESSION['GR_No'];?></td>
            </tr>
            <tr>
                <td><b>Name:</b></td>
                <td><?php echo $_SESSION['First_Name'];?></td>
                <td><?php echo $_SESSION['Middle_Name'];?></td>
                <td><?php echo $_SESSION['Last_Name'];?></td>
            </tr>
            <tr>
                <td><b>Email:</b></td>
                <td colspan="2"><?php echo $_SESSION['Email'];?></td>
            </tr>
            <tr>
                <td><b>Department:</b></td>
                <td colspan="2"><?php echo $_SESSION['Department'];?></td>
            </tr>
            <tr>
                <td><b>Semister:</b></td>
                <td colspan="2"><?php echo $_SESSION['Semister'];?></td>
            </tr>
        </table>
        <form action="" method="post">
            <input class="edit" type="submit" value="Edit">
        </form>
    </div>
  </div>