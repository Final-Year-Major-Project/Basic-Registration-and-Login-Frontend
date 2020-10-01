<?php

function Createdb() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "examsystem";

    // Create connection

    $connection = mysqli_connect($servername, $username, $password);

    // check connection

    if(!$connection) {
        die("Connection Failed:".mysqli_connect_err());
    }

    // Create Database

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($connection, $sql)) {
        $connection = mysqli_connect($servername, $username, $password, $dbname);
        
        return $connection;
    }
    else { 
        echo "Error while Creating the Database".mysqli_error($connection);
    }  
}

function createTables() {

    $connection = Createdb();

    $sql = "CREATE TABLE IF NOT EXISTS admin_table (
            admin_id VARCHAR(10) PRIMARY KEY,
            admin_Name VARCHAR(20) NOT NULL,
            admin_email VARCHAR(30) NOT NULL UNIQUE,
            admin_password VARCHAR(15) NOT NULL
            )";
    
    mysqli_query($connection, $sql);

    $sql = "INSERT INTO admin_table (admin_id, admin_Name, admin_email, admin_password) VALUES ('AD_Uday', 'Uday Ingale', 'uday.ingale@vit.edu', 'UdayIngale@11')";;

    mysqli_query($connection, $sql);

    $sql = "CREATE TABLE IF NOT EXISTS students (
            GR_No VARCHAR(10) PRIMARY KEY,
            first_Name VARCHAR(20) NOT NULL,
            middle_Name VARCHAR(20) NOT NULL,
            last_Name VARCHAR(20) NOT NULL,
            Email VARCHAR(35) NOT NULL UNIQUE,
            Department VARCHAR(40) NOT NULL,
            Semister VARCHAR(20) NOT NULL,
            Pswd VARCHAR(12) NOT NULL
    )";

    mysqli_query($connection, $sql);

    $sql = "CREATE TABLE IF NOT EXISTS teachers (
            Ref_ID VARCHAR(10) PRIMARY KEY,
            first_Name VARCHAR(20) NOT NULL,
            middle_Name VARCHAR(20) NOT NULL,
            last_Name VARCHAR(20) NOT NULL,
            Email VARCHAR(35) NOT NULL UNIQUE,
            Department VARCHAR(40) NOT NULL,
            Subjects VARCHAR(20) NOT NULL,
            Pswd VARCHAR(12) NOT NULL
            )";

    mysqli_query($connection, $sql);

}

createTables();
?>