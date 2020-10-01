<?php 
    require_once('./server/addStudent.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css_stylesheets/login.css">
    <title>App</title>
</head>
<body>
    <div class="head">
        <h1 class="headline">Online Exam System</h1>
        <div class="nav">
            <a href="index.php"><i id="home-icon" class="fa fa-home"></i></a>
            <a class="home" href="index.php">Home</a>
            <a href="./student/studentlogin.php"><input class="signup" type="button" value="Log In" name="login"></a>
        </div>
    </div>
    <div class="user">
        <h1>Student Registration</h1>
    </div>

    <form action="" method="POST" autocomplete="off">
        <div class="container">
        

            <label><b>GR Number</b></label> &nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="Enter GR Number" name="s_GR_No" required> <br>

            <label><b>First Name</b></label> &nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="Enter First Name" name="s_first_Name" required> <br>
            
            <label><b>Middle Name</b></label> &nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="Enter Middle Name" name="s_middle_Name" required> <br>
            
            <label><b>Last Name</b></label> &nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="Enter Last Name" name="s_last_Name" required> <br>
            
            <label><b>Email</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" placeholder="Enter Email" name="s_Email" required> <br>
            
            <label><b>Department</b></label> &nbsp;&nbsp;&nbsp;
            <select name="s_Department" required>
                <option disabled selected>Choose your option</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Electronics">Electronics</option>
            </select> <br>

            <label><b>Semister</b></label> &nbsp;&nbsp;&nbsp;
            <select name="s_Semister" required>
                <option disabled selected>Choose your option</option>
                <option value="FY Sem1">FY Sem-1</option>
                <option value="FY Sem2">FY Sem-2</option>
                <option value="SY Sem1">SY Sem-1</option>
                <option value="SY Sem2">SY Sem-2</option>
                <option value="TY Sem1">SY Sem-1</option>
                <option value="TY Sem2">SY Sem-2</option>
                <option value="FINAL Year Sem1">FINAL Year Sem-1</option>
                <option value="FINAL Year Sem2">FINAL Year Sem-2</option>
            </select> <br>

            <label><b>Password</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="s_password" type="password" pattern=".{8,}" required title="Minimum 8 Characters required" placeholder="Enter Password" required>
            <br>

            <label><b>Check Password</b></label> &nbsp;&nbsp;
            <input name="s_match_password" type="password" pattern=".{8,}" required title="Minimum 8 Characters required" placeholder="Enter Password" required>
            <br>

            <button name="s_register">Register</button>


        </div>
    </form>
</body>
</html>