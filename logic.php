<?php 
    require_once ('functions.php');

    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
    }//if ($_SERVER['REQUEST_METHOD'] === 'POST')    

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        
    }//if ($_SERVER['REQUEST_METHOD'] === 'GET')


    //Setting Up Environment Variables
    if (!@($_SESSION['login_user'])) {
        if ($_SERVER['PHP_SELF'] !== "") {
//            header ('Location: login.php');
        }
    }else{
//        $db->where()
    }

    $_SESSION['login_firstname'] = 'Vijay';
    $_SESSION['login_lastname'] = 'Goswami';
    $_SESSION['login_email'] = 'hexpit@gmail.com';
    $_SESSION['login_mobile'] = '9045533427';
    $_SESSION['login_role'] = '9';
    $_SESSION['login_id'] = '1';
?>