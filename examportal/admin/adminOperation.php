<?php 
    require_once("../server/db.php");

    session_start();

    $con = Createdb();

    if(!$con) {
        echo "Cannot connect to the Database";
    }

    if(isset($_POST['admin_login'])) {
        adminVerification();
    }
    

    function adminVerification() {

        $admin_id = $_POST['ad_id'];
        $admin_pswd = $_POST['ad_pswd'];

        $verify = "SELECT admin_password FROM admin_table WHERE admin_id = '$admin_id'";

        $success = mysqli_query($GLOBALS['con'], $verify);

        if(mysqli_num_rows($success) > 0){
            while($row = mysqli_fetch_assoc($success)) {
                if($row['admin_password'] == $admin_pswd ) {
                    $_SESSION['isadminloggedin'] = true;
                }
                else {
                    $_SESSION['isadminloggedin'] = false;
                    textNode('tomato', "Error: Invalid Password!");
                }
            }
        }
        else {
            $_SESSION['isadminloggedin'] = false;
            textNode('tomato', "Error: Invalid Username!");
        }
    }
    

    function getStudentsData() {
        $sql = "SELECT * FROM students";

        $result = mysqli_query($GLOBALS['con'], $sql);

        if(mysqli_num_rows($result) > 0) {
            return $result;
        }
    }

    function getTeachersData() {
        $sql = "SELECT * FROM teachers";

        $result = mysqli_query($GLOBALS['con'], $sql);

        if(mysqli_num_rows($result) > 0) {
            return $result;
        }
    }

    function textNode($color, $msg) {
        $element = "<h4 style='background-color: $color;padding: 1em;'>$msg</h4>";
        echo $element;
    }

?>