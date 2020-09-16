<?php
    require_once dirname(__FILE__).'\..\utils\Database.php';

    class Game{
        private $id;
        private $timing;
        private $score;
        private $nonshoot;
        private $ratio;
        private $id_users;
        private $id_sessions;
        private $db;

        public function __construct($_id=0,$_timing='', $_score='', $_nonshoot='', $_ratio='', $_id_users='', $_id_sessions=''){
            $this->db = Databases::getInstance();
            $this->id = $_id;
            $this->timing = $_timing;
            $this->score = $_score;
            $this->nonshoot = $_nonshoot;
            $this->ratio = $_ratio;
            $this->id_users = $_id_users;
            $this->id_sessions = $_id_sessions;
        }
        // Création d'une méthode magique getter qui permettra de créer dynamiquement un getter pour chaque attribut existant.
        // Méthode permettant de faire des échos de propriétés privées.
        public function __get($attr){
            return $this->$attr;
        }
        public function __set($attr, $value){
            $this->$attr = $value;
        }
        
        public function createGame(){
			$insertGames_sql = 'INSERT INTO `session` (`id`, `timing`, `score`, `nonshoot`, `ratio`, `id_users`, `id_sessions`) 
            VALUES (:id, :timing, :score, :nonshoot, :ratio, :id_users, :id_sessions);';
            $gamesStatement = $this->db->prepare($insertGames_sql);
			$gamesStatement->bindValue(':id', $this->id, PDO::PARAM_INT);
			$gamesStatement->bindValue(':timing', $this->timing, PDO::PARAM_STR);
			$gamesStatement->bindValue(':score', $this->score, PDO::PARAM_INT);
			$gamesStatement->bindValue(':nonshoot', $this->nonshoot, PDO::PARAM_INT);
			$gamesStatement->bindValue(':ratio', $this->ratio, PDO::PARAM_STR);
			$gamesStatement->bindValue(':id_users', $this->id_users, PDO::PARAM_STR);
			$gamesStatement->bindValue(':id_sessions', $this->id_sessions, PDO::PARAM_STR);
            return $gamesStatement->execute();
        }

        /**
         * retour liste des users enregistré
         * @return array
         */

		public function readAllGames(){
            $listGames_sql = 'SELECT `id`,`timing`, `score`,`nonshoot`, `ratio`,`id_users`, `id_games` FROM `games`;';
            $gamesStatement = $this->db->query($listGames_sql);
            $listGames = [];
            if ($gamesStatement instanceof PDOstatement){
                $listGames = $gamesStatement->fetchAll(PDO::FETCH_OBJ);
            }
            return $listGames;
        }
		public function readOneGame(){
            $gameInfos_sql = 'SELECT `timing`, `score`, `nonshoot`,`ratio` FROM `games` WHERE `id`=:id';
            $gameStatement = $this->db->prepare($gameInfos_sql);
            $gameStatement->bindValue(':id', $this->id,PDO::PARAM_INT);
            $gameInfos = null;
            if ($gameStatement->execute()){
                $gameInfos = $gameStatement->fetch(PDO::FETCH_OBJ);
            }
            return $gameInfos;
        }
        
		// public function delete(){
        //     $usersDelete_sql = 'DELETE FROM `gamesession` WHERE `id`=:id;';
        //     $usersDelete = $this->db->prepare($usersDelete_sql);
        //     $usersDelete->bindValue(':id', $this->id,PDO::PARAM_INT);
        //     return $usersDelete->execute();
        // }   
        
    }