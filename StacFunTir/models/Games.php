<?php
    require_once dirname(__FILE__).'/../utils/Database.php';

    class Game{
        private $id;
        private $timing;
        private $score;
        private $nonshoot;
        private $ratio;
        private $id_users;
        private $id_sessions;
        private $db;

        public function __construct($_id=0,$_timing=0, $_score=0, $_nonshoot=0, $_ratio='', $_id_users=0, $_id_sessions=0){
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
			$insertGames_sql = 'INSERT INTO `games` (`id`, `timing`, `score`, `nonshoot`, `ratio`, `id_users`, `id_sessions`) 
            VALUES (:id, :timing, :score, :nonshoot, :ratio, :id_users, :id_sessions);';
            var_dump($insertGames_sql);
            $gameStmt = $this->db->prepare($insertGames_sql);
			$gameStmt->bindValue(':id', $this->id, PDO::PARAM_INT);
			$gameStmt->bindValue(':timing', $this->timing, PDO::PARAM_INT);
			$gameStmt->bindValue(':score', $this->score, PDO::PARAM_INT);
			$gameStmt->bindValue(':nonshoot', $this->nonshoot, PDO::PARAM_INT);
			$gameStmt->bindValue(':ratio', $this->ratio, PDO::PARAM_STR);
			$gameStmt->bindValue(':id_users', $this->id_users, PDO::PARAM_INT);
			$gameStmt->bindValue(':id_sessions', $this->id_sessions, PDO::PARAM_INT);
            return $gameStmt->execute();
        }

        /**
         * retour liste des users enregistré
         * @return array
         */

		public function readAllGames(){
            $listGames_sql = 'SELECT `id`,`timing`, `score`,`nonshoot`, `ratio`,`id_users`, `id_games` FROM `games`;';
            $gamesStmt = $this->db->query($listGames_sql);
            $listGames = [];
            if ($gamesStmt instanceof PDOstatement){
                $listGames = $gamesStmt->fetchAll(PDO::FETCH_OBJ);
            }
            return $listGames;
        }
		public function readOneGame(){
            $gameInfos_sql = 'SELECT `timing`, `score`, `nonshoot`,`ratio` FROM `games` WHERE `id`=:id';
            $gameStmt = $this->db->prepare($gameInfos_sql);
            $gameStmt->bindValue(':id', $this->id,PDO::PARAM_INT);
            $gameInfos = null;
            if ($gameStmt->execute()){
                $gameInfos = $gameStmt->fetch(PDO::FETCH_OBJ);
            }
            return $gameInfos;
        }

		public function readGameBySession(){
            $gameBySessionStmt_sql = 'SELECT `id_users` FROM `games` WHERE `id_sessions`=:id_sessions';
            $gameBySessionStmt = $this->db->prepare($gameBySessionStmt_sql);
            $gameBySessionStmt->bindValue(':id_sessions', $this->id_sessions,PDO::PARAM_INT);
            $gameBySessionStmt = null;
            if ($gameStmt->execute()){
                $gameBySessionStmt = $gameStmt->fetch(PDO::FETCH_OBJ);
            }
            return $gameBySessionStmt;
        }

		public function updateGame(){
            $gameScoreUpdate_sql = 'UPDATE `games` SET `timing`=:timing,`score`=:score,`nonshoot`=:nonshoot,`ratio`=:ratio WHERE `id`=:id;';
            $gameScoreUpdate = $this->db->prepare($userUpdate_sql);
            $gameScoreUpdate->bindValue(':id', $this->id,PDO::PARAM_INT);
			$gameScoreUpdate->bindValue(':timing', $this->timing,PDO::PARAM_INT);
            $gameScoreUpdate->bindValue(':score', $this->score,PDO::PARAM_INT);
            $gameScoreUpdate->bindValue(':nonshoot',$this->nonshoot,PDO::PARAM_INT);
            $gameScoreUpdate->bindValue(':ratio',$this->ratio,PDO::PARAM_INT);
            return $gameScoreUpdate->execute();
		}
		public function followingUser(){
            $followingUser_sql = 'SELECT `id_users` FROM `games` WHERE `id_sessions`=:id_sessions;';
            $followingUser = $this->db->prepare($userUpdate_sql);
            $followingUser->bindValue(':id_users', $this->id_users,PDO::PARAM_INT);
            $followingUser->bindValue(':id_sessions', $this->id_sessions,PDO::PARAM_INT);
            return $followingUser->execute();
		}
        
		// public function delete(){
        //     $usersDelete_sql = 'DELETE FROM `gamesession` WHERE `id`=:id;';
        //     $usersDelete = $this->db->prepare($usersDelete_sql);
        //     $usersDelete->bindValue(':id', $this->id,PDO::PARAM_INT);
        //     return $usersDelete->execute();
        // }   
        
    }