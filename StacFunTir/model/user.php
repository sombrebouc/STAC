<?php
    require_once dirname(__FILE__).'/../util/Database.php';

    class User{
        private $id;
        private $firstname;
        private $lastname;
        private $email;
        private $phoneNumber;
        private $licensefftir;
        private $roles;
        private $db;

        public function __construct($id=0,$firstname='',$lastname='',$email='',$phoneNumber='',$licensefftir='',$roles=''){
            // ==== reco à la bdd pour consulter les éléments de celle-ci ==== //
            // ==== '$this->' fait partie du système des getters ==== //
            $this->id=$id;
            $this->firstname=$firstname;
            $this->lastname=$lastname;
            $this->email=$email;
            $this->phoneNumber=$phoneNumber;
            $this->licensefftir=$licensefftir;
            $this->roles=$roles;
            $this->db=Database::getInstance();
        }
        /**
         * méthode magique getter qui permettra
         * de créer dynamiquement un getter pour chaque
         * attribut existant.
         */
        public function __get($attr){
            return $this->$attr;
        }
        // public function setMail($mail){
        //     if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
        //         $this->mail=$mail;
        //     }
        // }
        public function __set($attr, $value){
            $ths->$attr = $value;
        }
        
        /**
         * Permet de créer un user dans la table users
         * @retourne un booleen
         */
        // Creation du user
        public function createUser(){
            $sql = 'INSERT INTO `users`(`firstname`,`lastname`,`licensefftir`,`phone`,`mail`) VALUES(:firstname,:lastname,:email,:phoneNumber,:licensefftir)';
            $userstmt = $this->db->prepare($sql);
            $userstmt->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
            $userstmt->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
            $userstmt->bindValue(':email', $this->email, PDO::PARAM_STR);
            $userstmt->bindValue(':phone', $this->phoneNumber, PDO::PARAM_STR);
            $userstmt->bindValue(':licensefftir', $this->licensefftir, PDO::PARAM_STR);
            return $userstmt->execute();
        }
        // Update du user
        public function updateUser(){
            $sql = 'UPDATE `users`(`firstname`,`lastname`,`licensefftir`,`phone`,`mail`) VALUES(:firstname,:lastname,:email,:phoneNumber,:licensefftir)';
            $userstmt = $this->db->prepare($sql);
            $userstmt->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
            $userstmt->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
            $userstmt->bindValue(':email', $this->email, PDO::PARAM_STR);
            $userstmt->bindValue(':phone', $this->phoneNumber, PDO::PARAM_STR);
            $userstmt->bindValue(':licensefftir', $this->licensefftir, PDO::PARAM_STR);
            return $userstmt->execute();
        }
        // Suppression du user
        public function deleteUser(){
            $sql = 'DELETE `users`(`firstname`,`lastname`,`licensefftir`,`phone`,`mail`) VALUES(:firstname,:lastname,:email,:phoneNumber,:licensefftir)';
            $userstmt = $this->db->prepare($sql);
            $userstmt->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
            $userstmt->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
            $userstmt->bindValue(':email', $this->email, PDO::PARAM_STR);
            $userstmt->bindValue(':phone', $this->phoneNumber, PDO::PARAM_STR);
            $userstmt->bindValue(':licensefftir', $this->licensefftir, PDO::PARAM_STR);
            return $userstmt->execute();
        }

        // Lecture des users
        public function readAll(){
            $sql = 'SELECT `firstname`,`lastname`,`licensefftir` FROM `users`';
            $userstmt = $this->db->query($sql);
            $usersList = [];
            if($userstmt instanceof PDOstatement){
                $usersList = $userstmt->fetchAll(PDO::FETCH_OBJ);
            }
            return $usersList;
        }

    }