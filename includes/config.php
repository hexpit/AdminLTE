<?php
    
    //Site Settings
    define ("SITENAME", "Attrix Technologies");


    //Database Settings
    define ("DB_USERNAME", "root");
    define ("DB_PASSWORD", "Numb@r27");
    define ("DB_SERVER", "localhost");
    define ("DB_DATABASE", "admin");
    require_once ('MysqliDb.php');
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    $db = new MysqliDb($conn);



    //Global Variables
    $error = array();
    $success = array();
    
    





?>