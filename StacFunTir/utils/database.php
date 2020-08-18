<?php
    require_once dirname(__FILE__).'/../config/params.php';

    class Database{
        // static permet d'executer la fonction sans instance de class
        public static function getInstance(){
            $dsn= 'mysql:host='.HOST.';dbname='.DATABASE.';charset=utf8';
            $option= [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

            try{
                return new PDO($dsn, USER, PASSWORD, $option);
            }catch (PDOException $e){
                die('Problème de connexion à la base de donnée'.$e->getMessage());
            }
        }
    }