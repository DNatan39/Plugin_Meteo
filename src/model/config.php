<?php


class connect {
    private function dbConnect()
    {
        try {
            $database = new PDO('mysql:host=localhost;dbname=wp-options;charset=utf8', 'root', '');
            return $database;
        } catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }
    }
}