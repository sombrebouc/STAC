<?php
    require_once dirname(__FILE__).'\..\utils\Database.php';

    class Session{
        private $id;
        private $date;
        private $numberoftargets;
        private $db;

        public function __construct($_id=0,$_date='',$_numberoftargets=''){
            $this->db = Databases::getInstance();
            $this->id = $_id;
            $this->date = $_date;
            $this->numberoftargets = $_numberoftargets;
        }
        // Création d'une méthode magique getter qui permettra de créer dynamiquement un getter pour chaque attribut existant.
        // Méthode permettant de faire des échos de propriétés privées.
        public function __get($attr){
            return $this->$attr;
        }
        public function __set($attr, $value){
            $this->$attr = $value;
        }
        
        public function create(){
			$sessions_sql = 'INSERT INTO `session` (`id`, `date`, `numberoftargets`) VALUES (:id, :date, :numberoftargets);';
            $sessionStmt = $this->db->prepare($sessions_sql);
			$sessionStmt->bindValue(':id', $this->id, PDO::PARAM_INT);
			$sessionStmt->bindValue(':date', $this->date, PDO::PARAM_STR);
			$sessionStmt->bindValue(':numberoftargets', $this->numberoftargets, PDO::PARAM_INT);
            return $sessionStmt->execute();
        }

        /**
         * retour liste des users enregistré
         * @return array
         */

		public function readAll(){
            $sessionsList_sql = 'SELECT `id`,`date`, `numberoftargets` FROM `gamesession`;';
            $sessionStmt = $this->db->query($sessionsList_sql);
            $sessionsList = [];
            if ($sessionStmt instanceof PDOstatement){
                $sessionsList = $sessionStmt->fetchAll(PDO::FETCH_OBJ);
            }
            return $listGames;
        }
		public function readSingle(){
            $sessionsInfos_sql = 'SELECT `date`, `numberoftargets` FROM `gamesession` WHERE `id`=:id';
            $sessionStmt = $this->db->prepare($sessionsInfos_sql);
            $sessionStmt->bindValue(':id', $this->id,PDO::PARAM_INT);
            $sessionsInfos = null;
            if ($sessionStmt->execute()){
                $sessionsInfos = $sessionStmt->fetch(PDO::FETCH_OBJ);
            }
            return $sessionsInfos;
        }
        
		// public function delete(){
        //     $usersDelete_sql = 'DELETE FROM `gamesession` WHERE `id`=:id;';
        //     $usersDelete = $this->db->prepare($usersDelete_sql);
        //     $usersDelete->bindValue(':id', $this->id,PDO::PARAM_INT);
        //     return $usersDelete->execute();
        // }   
        
    }