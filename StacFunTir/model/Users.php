<?php
    require_once dirname(__FILE__).'\..\util\Database.php';

    class User{
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
			$insertUsers_sql = 'INSERT INTO `users` (`id`, `lastname`, `firstname`,`license`,`password`) VALUES (:id, :lastname, :firstname, :license, :password);';
            $usersStatement = $this->db->prepare($insertUsers_sql);
			$usersStatement->bindValue(':id', $this->id, PDO::PARAM_INT);
			$usersStatement->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
            $usersStatement->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
            $usersStatement->bindValue(':license',$this->license, PDO::PARAM_STR);
            $usersStatement->bindValue(':password',$this->password, PDO::PARAM_STR);
            return $usersStatement->execute();
        }
        public function verifyLicense(){
            $controlLicense_sql = 'SELECT `license` FROM `users` WHERE `license` = :license;';
            $controlLicense = $this->db->prepare($controlLicense_sql);
            $controlLicense->bindValue(':license', $this->license,PDO::PARAM_STR);
            $userLicense = NULL;
            if($controlLicense->execute()){
				$userLicense = $controlLicense->fetch(PDO::FETCH_OBJ);
            }
            return $userLicense;
        }

        public function verifyPasword(){
            $controlPassword_sql = 'SELECT `password` FROM `users` WHERE `license` = :license;';
            $controlPassword = $this->db->prepare($controlPassword_sql);
            $controlPassword->bindValue(':license', $this->license,PDO::PARAM_STR);
            $userPassword = NULL;
            if($controlPassword->execute()){
				$userPassword = $controlPassword->fetch(PDO::FETCH_OBJ);
            }
            return $userPassword;
        }

        //  public function verifyUser(){
        //      $controlUser_sql = 'SELECT `license`, `password` FROM `users` WHERE `license` = :license;';
        //      $controlUser = $this->db->prepare($controlUser_sql);
        //      $controlUser->bindValue(':license',$this->license,PDO::PARAM_STR);
        //      if ($controlUser->execute()){
		//  		$userVerified = $controlUser->fetch(PDO::FETCH_OBJ);
		//  	}
        //      return $userVerified;
        //  }
        /**
         * retour liste des users enregistré
         * @return array
         */
		public function readAll(){
            $listUsers_sql = 'SELECT `id`,`lastname`, `firstname`,`license`,`password` FROM `users`;';
            $usersStatement = $this->db->query($listUsers_sql);
            $listUsers = [];
            if ($usersStatement instanceof PDOstatement ) {
                $listUsers = $usersStatement->fetchAll(PDO::FETCH_OBJ);
            }
            return $listUsers;
		}

		public function readSingle(){
			// :nomDeVariable pour les données en attentes
			$viewUsers_sql = 'SELECT `id`, `lastname`, `firstname`,`license` FROM `users` WHERE `id` = :id ;';
            $usersStatement = $this->db->prepare($viewUsers_sql);
            $usersStatement->bindValue(':id', $this->id,PDO::PARAM_INT);
			$usersView = null;
			if ($usersStatement->execute()){
				$usersView = $usersStatement->fetch(PDO::FETCH_OBJ);
			}
			return $usersView;
		}

		public function update(){
            $usersStatement_sql = 'UPDATE `users` SET `lastname`=:lastname,`firstname`=:firstname,`license`=:license,`password`=:password WHERE `id`=:id;';
            $usersStatement = $this->db->prepare($usersStatement_sql);
            $usersStatement->bindValue(':id', $this->id,PDO::PARAM_INT);
			$usersStatement->bindValue(':lastname', $this->lastname,PDO::PARAM_STR);
            $usersStatement->bindValue(':firstname', $this->firstname,PDO::PARAM_STR);
            $usersStatement->bindValue(':license',$this->license,PDO::PARAM_STR);
            $usersStatement->bindValue(':password',$this->password,PDO::PARAM_STR);
            return $usersStatement->execute();
		}

		public function delete(){
            $usersDelete_sql = 'DELETE FROM `users` WHERE `id`=:id;';
            $usersDelete = $this->db->prepare($usersDelete_sql);
            $usersDelete->bindValue(':id', $this->id,PDO::PARAM_INT);
            return $usersDelete->execute();
        }
    }