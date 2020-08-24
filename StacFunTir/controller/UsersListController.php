  
<?php 

require_once dirname(__FILE__).'\HeaderController.php';
require_once dirname(__FILE__).'\..\model\Users.php';

$user = new Users();

$listUsers = $user->readAll();
// var_dump($listUsers);

require dirname(__FILE__).'\..\view\UsersList.php';