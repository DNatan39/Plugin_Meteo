<?php

// function dbConnect(){
//     try {
//         $database = new PDO('mysql:host=localhost;dbname=wordpress;charset=utf8', 'root', '');
//         return $database;
//     } catch(Exception $e) {
//         die('Erreur : '.$e->getMessage());
//     }
// }


function dbCreate(){
    global $wpdb;
    $sql = $wpdb->prepare("CREATE TABLE `shortcode` (
        `id` int(6) NOT NULL,
        `shortcode` varchar(30) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
    $sql->execute();
    return $sql;
}