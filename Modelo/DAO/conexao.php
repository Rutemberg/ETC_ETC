<?php

abstract class conexao {
    function __construct() {        
    }
    public static function getInstance() {
        try {
            $pdo = new PDO("mysql:host=localhost; dbname=etceetc", "root", "",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $pdo;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}