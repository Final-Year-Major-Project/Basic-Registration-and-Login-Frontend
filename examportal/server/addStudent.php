<?php 
    require_once("db.php");

    $con = Createdb();

    if(!$con) {
        textNode('tomato' ,"Error: Cannot connect to the Database!");
    }

    // Create Button click for register student button
    if(isset($_POST['s_register'])) {
        
        addStudent();
    }

    function addStudent() {
        $Grno = textboxValue("s_GR_No");
        $firstName = textboxValue("s_first_Name");
        $middleName = textboxValue("s_middle_Name");
        $lastName = textboxValue("s_last_Name");
        $Email = textboxValue("s_Email");
        $Department = $_POST['s_Department']; 
        $Semister = $_POST['s_Semister'];
        $pswd = textboxValue('s_password');
        $c_pswd = textboxValue('s_match_password');

        if($Grno &&$firstName && $middleName && $lastName && $Email && $Department && $Semister && $pswd) {

            if(($pswd == $c_pswd)) {
                
                $sql = "INSERT INTO students (GR_No, first_Name, middle_Name, last_Name, Email, Department, Semister, Pswd) VALUES ('$Grno', '$firstName', '$middleName', '$lastName', '$Email', '$Department', '$Semister', '$pswd')";
            
                if(mysqli_query($GLOBALS['con'], $sql)) {
                    textNode('lightgreen' ,"Record Successfully Inserted..!");
                    
                }
                else {
                    textNode('tomato' ,"Error: Please provide the correct data!");
                }
            }
            else{
                textNode('tomato' ,"Error: Password did NOT match!");
            }
        }
        else {
            textNode('tomato' ,"Please provide the data in Input fields..!");
        }
    }

    //  To escape SQL Injection
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