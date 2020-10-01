<?php 
    require_once("../server/db.php");

    session_start();

    $con = Createdb();

    if(!$con) {
        echo "Cannot connect to the Database";
    }

    if(isset($_POST['S_login'])) {
        studentVerification();
    }

    function studentVerification() {

        $student_GRNo = $_POST['S_Gr_No_check'];
        $student_mail = $_POST['S_Email_check'];
        $student_pswd = $_POST['S_pswd_check'];

        if( $student_GRNo && $student_mail && $student_pswd) {

        $verify = "SELECT * FROM students WHERE GR_No = '$student_GRNo'";

        $success = mysqli_query($GLOBALS['con'], $verify);

        if(mysqli_num_rows($success) > 0) {
            while($row = mysqli_fetch_assoc($success)) {
                if($row['Email'] == $student_mail &&  $row['Pswd'] == $student_pswd) {
                    $_SESSION['isstudentloggedin'] = true;
                    $_SESSION['GR_No'] = $row['GR_No'];
                    $_SESSION['First_Name'] = $row['first_Name'];
                    $_SESSION['Middle_Name'] = $row['middle_Name'];
                    $_SESSION['Last_Name'] = $row['last_Name'];
                    $_SESSION['Email'] = $row['Email'];
                    $_SESSION['Department'] = $row['Department'];
                    $_SESSION['Semister'] = $row['Semister'];
                    header('location: studentHome.php');
                    
                }
                else {
                    $_SESSION['isstudentloggedin'] = false;
                    textNode('tomato', "Error: Invalid Credentials!");
                } 
            }
        }
        else {
            $_SESSION['isstudentloggedin'] = false;
            textNode('tomato', "Error: No such user Exists!");
        }
        
    }
    }

    function textNode($color, $msg) {
        $element = "<h4 style='background-color: $color;padding: 1em;'>$msg</h4>";
        echo $element;
    }

?>