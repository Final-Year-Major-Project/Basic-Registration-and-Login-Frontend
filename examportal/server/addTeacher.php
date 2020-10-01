<?php 
    require_once('db.php');

    $con = Createdb();

    if(!$con) {
        echo "Cannot connect to the Database";
    }

    if(isset($_POST['t_register'])) {
        addTeacher();
    }

    function addTeacher() {

        $Refno = textboxValue("t_Ref_Id");
        $firstName = textboxValue("t_first_Name");
        $middleName = textboxValue("t_middle_Name");
        $lastName = textboxValue("t_last_Name");
        $Email = textboxValue("t_Email");
        $Department = $_POST['t_Department']; 
        $subject = $_POST['t_subject'];
        $pswd = textboxValue('t_password');
        $c_pswd = textboxValue('t_match_password');

        if($Refno && $firstName && $middleName && $lastName && $Email && $Department && $subject && $pswd) {

            if(($pswd == $c_pswd)) {

                $sql = "INSERT INTO teachers (Ref_ID, first_Name, middle_Name, last_Name, Email, Department, Subjects, Pswd) VALUES ('$Refno', '$firstName', '$middleName', '$lastName', '$Email', '$Department', '$subject', '$pswd')";

                if(mysqli_query($GLOBALS['con'], $sql)) {
                    textNode('lightgreen' ,"Record Successfully Inserted..!");
                    
                }
                else {
                    textNode('tomato' ,"Error: Please provide the correct data!");
                }
            }
            else {
                textNode('tomato' ,"Error: Password did NOT match!");
            }
        }
        else {
            textNode('tomato' ,"Please provide the data in Input fields..!");
        }
    }

    function textboxValue($value) {
        $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
       if(empty($textbox)) {
           return false;
       }else {
           return $textbox;
       }
    }

    function textNode($color, $msg) {
        $element = "<h4 style='background-color: $color;padding: 1em;'>$msg</h4>";
        echo $element;
    }

?>