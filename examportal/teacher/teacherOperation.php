<?php 
    require_once('../server/db.php');

    session_start();

    $con = Createdb();

    if(!$con) {
        echo "Cannot connect to the Database";
    }
    if(isset($_POST['T_login'])) {
        teacherVerification();
    }

    function teacherVerification() {
        $teacher_Refno = $_POST['T_Ref_No_check'];
        $teacher_Email = $_POST['T_Email_check'];
        $teacher_pswd = $_POST['T_pswd_check'];

        if( $teacher_Refno && $teacher_Email && $teacher_pswd) {

            $verify = "SELECT * FROM teachers WHERE Ref_ID = '$teacher_Refno'";

            $success = mysqli_query($GLOBALS['con'], $verify);

            if(mysqli_num_rows($success) > 0) {
                while($row = mysqli_fetch_assoc($success)) {
                    if($row['Email'] == $teacher_Email &&  $row['Pswd'] == $teacher_pswd) {
                        $_SESSION['isteacherloggedin'] = true;
                        $_SESSION['Ref_ID'] = $row['Ref_ID'];
                        $_SESSION['First_Name'] = $row['first_Name'];
                        $_SESSION['Middle_Name'] = $row['middle_Name'];
                        $_SESSION['Last_Name'] = $row['last_Name'];
                        $_SESSION['Email'] = $row['Email'];
                        $_SESSION['Department'] = $row['Department'];
                        $_SESSION['Subjects'] = $row['Subjects'];
                        header('location: teacherHome.php');
                        
                    }
                    else {
                        $_SESSION['isteacherloggedin'] = false;
                        textNode('tomato', "Error: Invalid Credentials!");
                    }
                }
            }
            else {
                $_SESSION['isteacherloggedin'] = false;
                textNode('tomato', "Error: No such user Exists!");
            }
        }
    }

    function textNode($color, $msg) {
        $element = "<h4 style='background-color: $color;padding: 1em;'>$msg</h4>";
        echo $element;
    }

?>