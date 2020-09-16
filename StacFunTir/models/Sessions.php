<?php
    require_once dirname(__FILE__).'\..\utils\Database.php';

    class Session{
        private $id;
        private $date;
        private $numberoftargets;
        private $db;

        public function __construct($_id=0, $_numberoftargets=''){
            $this->db = Databases::getInstance();
            $this->id = $_id;
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
        
        public function createSession(){
			$sessions_sql = 'INSERT INTO `sessions` ( `numberoftargets`) VALUES (:numberoftargets);';
            $sessionStmt = $this->db->prepare($sessions_sql);
            $sessionStmt->bindValue(':numberoftargets', $this->numberoftargets, PDO::PARAM_INT);
            // init de l'id de session en string pour la récupération du lastInsertId()
            $id_session = "";
            // si les infos sont remplies, on lance l'execution de la création de la session
            if($sessionStmt->execute()){
                // on alimente la variable par le lastInsertId() contenu dans la bdd
                $id_session = $this->db->lastInsertId();
            }
            // on retourne la valeur de la variable alimentée par le lastInsertId()
            return $id_session; 
        }

        /**
         * retour liste des users enregistré
         * @return array
         */

		public function readAllSessions(){
            $sessionsList_sql = 'SELECT `id`,`numberoftargets` FROM `sessions`;';
            $sessionStmt = $this->db->query($sessionsList_sql);
            $sessionsList = [];
            if ($sessionStmt instanceof PDOstatement){
                $sessionsList = $sessionStmt->fetchAll(PDO::FETCH_OBJ);
            }
            return $listGames;
        }
		public function readOneSession(){
            $sessionsInfos_sql = 'SELECT `date`, `numberoftargets` FROM `sessions` WHERE `id`=:id';
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