<?php
    require_once dirname(__FILE__).'\..\utils\Database.php';

    class Game{
        private $id;
        private $date;
        private $numberoftargets;
        private $id_games;
        private $db;

        // Méthode magique appelée lors du chargement "new User()"
        public function __construct($_id=0,$_date='',$_numberoftargets='',$id_games=''){
            $this->db = Databases::getInstance();
        // hydratation 
            $this->id = $_id;
            $this->date = $_date;
            $this->numberoftargets = $_numberoftargets;
            $this->id_games = $id_games;
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $value){
            $this->$attr = $value;
        }
        
        public function create(){
			$insertGames_sql = 'INSERT INTO `gamesession` (`id`, `date`, `numberoftargets`, `id_games`) VALUES (:id, :date, :numberoftargets, :id_games);';
            $gamesStatement = $this->db->prepare($insertGames_sql);
			$gamesStatement->bindValue(':id', $this->id, PDO::PARAM_INT);
			$gamesStatement->bindValue(':date', $this->date, PDO::PARAM_STR);
			$gamesStatement->bindValue(':numberoftargets', $this->numberoftargets, PDO::PARAM_INT);
            $gamesStatement->bindValue(':id_games', $this->firstname, PDO::PARAM_INT);
            return $gamesStatement->execute();
        }

        /**
         * retour liste des users enregistré
         * @return array
         */

		public function readAll(){
            $listGames_sql = 'SELECT `id`,`date`, `numberoftargets`, `id_games` FROM `gamesession`;';
            $gamesStatement = $this->db->query($listGames_sql);
            $listGames = [];
            if ($gamesStatement instanceof PDOstatement){
                $listGames = $gamesStatement->fetchAll(PDO::FETCH_OBJ);
            }
            return $listGames;
        }
		public function readSingle(){
            $gameInfos_sql = 'SELECT `date`, `numberoftargets`, `id_games` FROM `gamesession` WHERE `id`=:id';
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