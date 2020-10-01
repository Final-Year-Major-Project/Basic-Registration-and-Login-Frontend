<?php 
    require_once('./server/addTeacher.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css_stylesheets/login.css">
    <title>Teacher Registration</title>
</head>
<body>
    <div class="head">
        <h1 class="headline">Online Exam System</h1>
        <div class="nav">
            <a href="index.php"><i id="home-icon" class="fa fa-home"></i></a>
            <a class="home" href="index.php">Home</a>
            <a href="./teacher/teacherlogin.php"><input class="signup" type="button" value="Teacher Login"></a>
        </div>
    </div>
    <div class="user">
        <h1>Teacher Registration</h1>
    </div>

    <form action="" method="POST" autocomplete="off">
        <div class="container">

            <label><b>Ref ID</b></label> &nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="Enter Reference Id" name="t_Ref_Id" required> <br>

            <label><b>First Name</b></label> &nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="Enter First Name" name="t_first_Name" required> <br>
            
            <label><b>Middle Name</b></label> &nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="Enter Middle Name" name="t_middle_Name" required> <br>
            
            <label><b>Last Name</b></label> &nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="Enter Last Name" name="t_last_Name" required> <br>
            
            <label><b>Email</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="Enter Email" name="t_Email" required> <br>
            
            <label><b>Department</b></label> &nbsp;&nbsp;&nbsp;
            <select name="t_Department" required>
                <option disabled selected>Choose your option</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Electronics">Electronics</option>
            </select> <br>

            <label><b>Subject</b></label> &nbsp;&nbsp;&nbsp;
            <select name="t_subject" required>
                <option disabled selected>Choose your option</option>
                <option value="Digital Electronics">Digital Electronics</option>
                <option value="Data Structures">Data Structures</option>
                <option value="Machine Learning">Machine Learning</option>
                <option value="OOPS">Object Oriented Programming</option>
                <option value="Web Development">Web Development</option>
            </select> <br>

            <label><b>Password</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="t_password" type="password" pattern=".{8,}" required title="Minimum 8 Characters required" placeholder="Enter Password" required>
            <br>

            <label><b>Check Password</b></label> &nbsp;&nbsp;
            <input name="t_match_password" type="password" pattern=".{8,}" required title="Minimum 8 Characters required" placeholder="Enter Password" required>
            <br>

            <button name="t_register">Register</button>
        </div>
    </form>

</body>

</html>
