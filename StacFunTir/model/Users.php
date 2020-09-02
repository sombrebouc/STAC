<?php
    require_once dirname(__FILE__).'\..\util\Database.php';
    class User
    {
        private $id;
        private $lastname;
        private $firstname;
        private $license;
        private $password;
        private $db;

        // Méthode magique appelée lors du chargement "new User()"
        public function __construct($_id=0,$_firstname='',$_lastname='',$_license='',$_password='')
        {
            $this->db = Databases::getInstance();
        // hydratation 
            $this->id = $_id;
            $this->lastname = $_lastname;
            $this->firstname = $_firstname;
            $this->license = $_license;
            $this->password = $_password;
        }

        // Création d'une méthode magique getter qui permettra de créer dynamiquement un getter pour chaque attribut existant.
        // Méthode permettant de faire des échos de propriétés privées.
        public function __get($attr)
        {
            return $this->$attr;
        }

        public function __set($attr, $value)
        {
            $this->$attr = $value;
        }
        // Création d'une méthode pour insérer une adresse email valide => Best Practice.
        // public function setemail($email)
        // {
        //     if(filter_var($email, FILTER_VALIDATE_Eemail))
        //     {
        //         $this->email = $email;            
        //     }
        // }

        public function create(){
			$insertUsers = 'INSERT INTO `users` (`id`, `lastname`, `firstname`,`license`,`password`) VALUES (:id, :lastname, :firstname, :license, :password)';
            $usersStatement = $this->db->prepare($insertUsers);
			$usersStatement->bindValue(':id', $this->id, PDO::PARAM_INT);
			$usersStatement->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
            $usersStatement->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
            $usersStatement->bindValue(':license',$this->license, PDO::PARAM_STR);
            $usersStatement->bindValue(':password',$this->password, PDO::PARAM_STR);
            return $usersStatement->execute();
        }

        public function verifyUser(){
            $controlUsers_sql = 'SELECT `id` FROM `users` WHERE `license` = :license AND `password` = :password';
            $controlUsers = $this->db->prepare($sql);
            $controlUsers->bindValue(':license',$this->license,PDO::PARAM_STR);
            $controlUsers->bindValue(':password',$this->password,PDO::PARAM_STR);
            if ($controlUsers->execute()){
				$userId = $controlUsers->fetch(PDO::FETCH_OBJ);
			}
            return $userId;
        }
        /**
         * retour liste des users enregistré
         * @return array
         */
		public function readAll(){
            $listUsers_sql = 'SELECT `id`,`lastname`, `firstname`,`license`,`password` FROM `users`';
            $usersStatement = $this->db->query($listUsers_sql);
            $listUsers = [];
            if ($usersStatement instanceof PDOstatement ) {
                $listUsers = $usersStatement->fetchAll(PDO::FETCH_OBJ);
            }
            return $listUsers;
		}

		public function readSingle(){
			// :nomDeVariable pour les données en attentes
			$sql_viewUsers = 'SELECT `id`, `lastname`, `firstname`,`license` FROM `users` WHERE `id` = :id ';
            $usersStatement = $this->db->prepare($sql_viewUsers);
            $usersStatement->bindValue(':id', $this->id,PDO::PARAM_INT);
			$usersView = null;
			if ($usersStatement->execute()){
				$usersView = $usersStatement->fetch(PDO::FETCH_OBJ);
			}
			return $usersView;
		}

		public function update(){
            $usersStatement_sql = 'UPDATE `users` SET `lastname`=:lastname,`firstname`=:firstname,`license`=:license,`password`=:password WHERE `id`=:id';
            $usersStatement = $this->db->prepare($sql);
            $usersStatement->bindValue(':id', $this->id,PDO::PARAM_INT);
			$usersStatement->bindValue(':lastname', $this->lastname,PDO::PARAM_STR);
            $usersStatement->bindValue(':firstname', $this->firstname,PDO::PARAM_STR);
            $usersStatement->bindValue(':license',$this->license,PDO::PARAM_STR);
            $usersStatement->bindValue(':password',$this->password,PDO::PARAM_STR);

            return $usersStatement->execute();
		}

		public function delete(){
            $usersDelete_sql = 'DELETE FROM `users` WHERE `id`=:id';
            $usersDelete = $this->db->prepare($usersDelete_sql);
            $usersDelete->bindValue(':id', $this->id,PDO::PARAM_INT);
            return $usersDelete->execute();
        }
    }