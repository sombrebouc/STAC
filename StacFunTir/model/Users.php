<?php
    require_once dirname(__FILE__).'\..\util\Database.php';
    class Users
    {
        private $id;
        private $lastname;
        private $firstname;
        private $licensefftir;
        private $password;
        private $phoneNumber;
        private $email;
        private $db;

        public function __construct($_id=0,$_lastname='',$_firstname='',$_licensefftir='',$_password='')
        {
            $this->db = Databases::getInstance();
            $this->id = $_id;
            $this->lastname = $_lastname;
            $this->firstname = $_firstname;
            $this->licensefftir = $_licensefftir;
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

        public function create()
		{
			$insertUsers = 'INSERT INTO `users`(`id`,`lastname`, `firstname`,`licensefftir`,`password`) VALUES ( :id, :lastname, :firstname, :licensefftir, :password)';
            $usersStatement = $this->db->prepare($insertUsers);
            $usersStatement->bindValue(':id', $this->id,PDO::PARAM_INT);
			$usersStatement->bindValue(':lastname', $this->lastname,PDO::PARAM_STR);
            $usersStatement->bindValue(':firstname', $this->firstname,PDO::PARAM_STR);
            $usersStatement->bindvalue(':licensefftir',$this->licensefftir,PDO::PARAM_STR);
            $usersStatement->bindvalue(':password',$this->password,PDO::PARAM_STR);
			return $usersStatement->execute();
        }
        public function findUser($text)
        {
            $sql = 'SELECT `id`,`firstname`,`lastname` FROM `users` WHERE `firstname`LIKE :firstname OR `lastname`LIKE :lastname';
            $searchUsers = $this->db->prepare($sql);
            $searchUsers->bindValue(':lastname',$text.'%',PDO::PARAM_STR);
            $searchUsers->bindValue(':firstname',$text.'%',PDO::PARAM_STR);
            $usersView = [];
            if ($searchUsers->execute()){
				$usersView = $searchUsers->fetchAll(PDO::FETCH_OBJ);
			}
            return $usersView;
        }
        /**
         * retour liste des users enregistré
         * @return array
         */
		public function readAll()
		{
            $listUsers_sql = 'SELECT `id`,`lastname`, `firstname`,`licensefftir`,`password` FROM `users`';
            $usersStatement = $this->db->query($listUsers_sql);
            $listUsers = [];
            if ($usersStatement instanceof PDOstatement ) {
                $listUsers = $usersStatement->fetchAll(PDO::FETCH_OBJ);
            }
            return $listUsers;
		}

		public function readSingle()
		{
			// :nomDeVariable pour les données en attentes
			$sql_viewUsers = 'SELECT `id`, `lastname`, `firstname`,`licensefftir` FROM `users` WHERE `id` = :id ';
            $usersStatement = $this->db->prepare($sql_viewUsers);
            $usersStatement->bindValue(':id', $this->id,PDO::PARAM_INT);
			$usersView = null;
			if ($usersStatement->execute()){
				$usersView = $usersStatement->fetch(PDO::FETCH_OBJ);
			}
			return $usersView;
		}

		public function update()
		{
            $sql = 'UPDATE `users` SET `lastname`=:lastname,`firstname`=:firstname,`licensefftir`=:licensefftir,`password`=:password WHERE `id`=:id';
            $usersStatement = $this->db->prepare($sql);
            $usersStatement->bindValue(':id', $this->id,PDO::PARAM_INT);
			$usersStatement->bindValue(':lastname', $this->lastname,PDO::PARAM_STR);
            $usersStatement->bindValue(':firstname', $this->firstname,PDO::PARAM_STR);
            $usersStatement->bindvalue(':licensefftir',$this->licensefftir,PDO::PARAM_STR);
            $usersStatement->bindvalue(':password',$this->password,PDO::PARAM_STR);

            return $usersStatement->execute();
		}

		public function delete()
		{
            $sql = 'DELETE FROM `users` WHERE `id`=:id';
            $usersDelete = $this->db->prepare($sql);
            $usersDelete->bindValue(':id', $this->id,PDO::PARAM_INT);
            return $usersDelete->execute();
        }
    }