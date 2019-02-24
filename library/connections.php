<?php

/*
 * Database connections
 */

function marlenajohnsonConnect() {
    $server = "localhost";
    $database = "robtwosi_marlenajohnson";
//    For Testing:
//    $database = "marlenajohnso";
    $user = "marlena";
    $password = "1Silverado!";
    $dsn = 'mysql:host=' . $server . ';dbname=' . $database;
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try {
        $marlenajohnsonLink = new PDO($dsn, $user, $password, $options);
//        For Testing:
        echo '$marlenajohnsonLink worked successfully<br>'; 
//        exit;
        return $marlenajohnsonLink;
    } catch (PDOException $exc) {
       header('location: acme/view?action=error');
       exit;
    }
}
marlenajohnsonConnect();