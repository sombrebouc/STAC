<?php
    require_once dirname(__FILE__).'/../utils/Database.php';

    class User{
        private $id;
        private $lastname;
        private $firstname;
        private $license;
        private $password;
        private $id_roles;
        private $db;

        // Méthode magique appelée lors du chargement "new User()"
        public function __construct($_id=0,$_firstname='',$_lastname='',$_license='',$_password='', $_id_roles=''){
            $this->db = Databases::getInstance();
        // hydratation 
            $this->id = $_id;
            $this->lastname = $_lastname;
            $this->firstname = $_firstname;
            $this->license = $_license;
            $this->password = $_password;
            $this->id_roles = $_id_roles;
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $value){
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

        /**
         * retour liste des users enregistré
         * @return array
         */

		public function readAllUsers(){
            $listUsers_sql = 'SELECT `id`,`lastname`, `firstname`,`license`,`password` FROM `users`;';
            $usersStatement = $this->db->query($listUsers_sql);
            $listUsers = [];
            if ($usersStatement instanceof PDOstatement){
                $listUsers = $usersStatement->fetchAll(PDO::FETCH_OBJ);
            }
            return $listUsers;
        }
		public function readOneUser(){
            $userInfos_sql = 'SELECT `lastname`, `firstname`,`license`,`password` FROM `users` WHERE `id`=:id';
            $userStatement = $this->db->prepare($userInfos_sql);
            $userStatement->bindValue(':id', $this->id,PDO::PARAM_INT);
            $userInfos = null;
            if ($userStatement->execute()){
                $userInfos = $userStatement->fetch(PDO::FETCH_OBJ);
            }
            return $userInfos;
        }
        
        public function readingConnect(){
            $readingConnect_sql = 'SELECT `id`, `lastname`, `firstname`, `license`, `password`, `id_roles` FROM `users` WHERE `license`=:license';
            $usersStatment = $this->db->prepare($readingConnect_sql);
            $usersStatment->bindValue(':license', $this->license, PDO::PARAM_STR);
            $userConnect = null;
            if ($usersStatment->execute()) {
                $userConnect = $usersStatment->fetch(PDO::FETCH_OBJ);
            }
            return $userConnect;
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
            
		public function readProfile(){
			$userProfile_sql = 'SELECT `lastname`, `firstname`,`license`, `password` FROM `users` WHERE `license` = :license;';
            $userProfileStatement = $this->db->prepare($userProfile_sql);
            $userProfileStatement->bindValue(':license', $this->license,PDO::PARAM_INT);
			$userProfile = null;
			if ($userProfileStatement->execute()){
				$userProfile = $userProfileStatement->fetch(PDO::FETCH_OBJ);
			}
			return $userProfile;
		}

		public function update(){
            $userUpdate_sql = 'UPDATE `users` SET `lastname`=:lastname,`firstname`=:firstname,`license`=:license,`password`=:password WHERE `id`=:id;';
            $userUpdateStatement = $this->db->prepare($userUpdate_sql);
            $userUpdateStatement->bindValue(':id', $this->id,PDO::PARAM_INT);
			$userUpdateStatement->bindValue(':lastname', $this->lastname,PDO::PARAM_STR);
            $userUpdateStatement->bindValue(':firstname', $this->firstname,PDO::PARAM_STR);
            $userUpdateStatement->bindValue(':license',$this->license,PDO::PARAM_STR);
            $userUpdateStatement->bindValue(':password',$this->password,PDO::PARAM_STR);
            return $userUpdateStatement->execute();
		}

		public function delete(){
            $usersDelete_sql = 'DELETE FROM `users` WHERE `id`=:id;';
            $usersDelete = $this->db->prepare($usersDelete_sql);
            $usersDelete->bindValue(':id', $this->id,PDO::PARAM_INT);
            return $usersDelete->execute();
        }   
        
    }


    
        // public function verifyLicense(){
        //     $controlLicense_sql = 'SELECT `license` FROM `users` WHERE `license` = :license;';
        //     $controlLicense = $this->db->prepare($controlLicense_sql);
        //     $controlLicense->bindValue(':license', $this->license,PDO::PARAM_STR);
        //     $userLicense = NULL;
        //     if($controlLicense->execute()){
		// 		$userLicense = $controlLicense->fetch(PDO::FETCH_OBJ);
        //     }
        //     return $userLicense;
        // }
        // public function verifyPasword(){
        //     $controlPassword_sql = 'SELECT `password` FROM `users` WHERE `license` = :license;';
        //     $controlPassword = $this->db->prepare($controlPassword_sql);
        //     $controlPassword->bindValue(':license', $this->license,PDO::PARAM_STR);
        //     $userPassword = NULL;
        //     if($controlPassword->execute()){
		// 		$userPassword = $controlPassword->fetch(PDO::FETCH_OBJ);
        //     }
        //     return $userPassword;
        // }
        //  public function verifyUser(){
        //      $controlUser_sql = 'SELECT `license`, `password` FROM `users` WHERE `license` = :license;';
        //      $controlUser = $this->db->prepare($controlUser_sql);
        //      $controlUser->bindValue(':license',$this->license,PDO::PARAM_STR);
        //      if ($controlUser->execute()){
		//  		$userVerified = $controlUser->fetch(PDO::FETCH_OBJ);
		//  	}
        //      return $userVerified;
        //  }