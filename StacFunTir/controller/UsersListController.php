  
<?php 

require_once dirname(__FILE__).'\HeaderController.php';
require_once dirname(__FILE__).'\..\model\Users.php';

$user = new Users();

$listUsers = $user->readAll();

require dirname(__FILE__).'\..\view\UsersList.php';