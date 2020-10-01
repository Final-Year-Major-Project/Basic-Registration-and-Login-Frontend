<?php
    require_once('adminOperation.php');

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    
    if(!$_SESSION['isadminloggedin']) {
        session_reset();

        session_destroy();
        header("location: index.php");
        exit;
    }

    if(isset($_POST['ad_logout'])) {
        session_reset();

        session_destroy();
        header("location: ../index.php");
        exit;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css_stylesheets/login.css">
  <title>Home</title>
</head>
<body>
  
    <div class="head">
        <h1 class="headline">Online Exam System</h1>
        <div class="nav">
            <form action="" method="post">
                <a href="../index.php"><i id="home-icon" class="fa fa-home"></i></a>
                <a class="home" href="../index.php">Home</a>
                <a href=""><input class="profile" type="button" value="Profile" ></a>  
                <input type='submit' name="ad_logout" class="logout" value="Log Out">
            </form>  
        </div>
    </div>

    <div class="container">
        <form action="" method="post">
            <button name="Students_List" style="margin-right: 10px;">Get Students Records</button>
            <button name="Teachers_List" style="margin-left: 10px;">Get Teachers Records</button>
            <table>
                <thead>
                    <tr>
                        <?php  
                            if(isset($_POST['Students_List'])) {
                                echo "<th>GR_No</th>";
                                echo "<th>First_Name</th>";
                                echo "<th>Middle_Name</th>";
                                echo "<th>Last_Name</th>";
                                echo "<th>Email</th>";
                                echo "<th>Department</th>";
                                echo "<th>Semister</th>";
                            }
                            if(isset($_POST['Teachers_List'])) {
                                echo "<th>Ref_No</th>";
                                echo "<th>First_Name</th>";
                                echo "<th>Middle_Name</th>";
                                echo "<th>Last_Name</th>";
                                echo "<th>Email</th>";
                                echo "<th>Department</th>";
                                echo "<th>Subject</th>";
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(isset($_POST['Students_List'])) {
                            $result = getStudentsData();

                            if($result) {
                                while($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?php echo $row['GR_No']; ?></td>
                                    <td><?php echo $row['first_Name']; ?></td>
                                    <td><?php echo $row['middle_Name']; ?></td>
                                    <td><?php echo $row['last_Name']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $row['Department']; ?></td>
                                    <td><?php echo $row['Semister']; ?></td>
                                </tr>
                                <?php
                                }
                            }
                        }
                        if(isset($_POST['Teachers_List'])) {
                            $result = getTeachersData();

                            if($result) {
                                while($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?php echo $row['Ref_ID']; ?></td>
                                    <td><?php echo $row['first_Name']; ?></td>
                                    <td><?php echo $row['middle_Name']; ?></td>
                                    <td><?php echo $row['last_Name']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $row['Department']; ?></td>
                                    <td><?php echo $row['Subjects']; ?></td>
                                </tr>
                                <?php
                                }
                            }
                        }
                    ?>
                </tbody>
            </table>
        </form>
    </div>

</body>