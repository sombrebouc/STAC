<?php
    require_once dirname(__FILE__).'\..\utils\Database.php';

    class Role{
        private $id;
        private $role;
        private $db;

        public function __construct($_id=0, $_role=''){
            $this->db = Databases::getInstance();
            $this->id = $_id;
            $this->role = $_role;
        }
        // Création d'une méthode magique getter qui permettra de créer dynamiquement un getter pour chaque attribut existant.
        // Méthode permettant de faire des échos de propriétés privées.
        public function __get($attr){
            return $this->$attr;
        }
        public function __set($attr, $value){
            $this->$attr = $value;
        }

        // ========================================
        // ========================================  

		public function readRole(){
            $roleInfos_sql = 'SELECT `id`, `id_roles`  FROM `users` INNER JOIN `roles` WHERE `:role`=`:id_roles`;';
            $roleStmt = $this->db->prepare($roleInfos_sql);
            $roleStmt->bindValue(':id_roles', $this->id,PDO::PARAM_INT);
            $roleInfos = null;
            if ($roleStmt->execute()){
                $roleInfos = $roleStmt->fetch(PDO::FETCH_OBJ);
            }
            return $roleInfos;
        }
        
		public function updateRole(){
            $userRoleUpdate_sql = 'UPDATE `users` SET `id_roles`=:id_roles INNER JOIN `roles`  WHERE  `roles.role`=`users.id_roles`;';
            $userRoleUpdate = $this->db->prepare($userRoleUpdate_sql);
            $userRoleUpdate->bindValue(':id', $this->id,PDO::PARAM_INT);
            return $userRoleUpdate->execute();
		}