  
<?php 
require dirname(__FILE__).'\..\model\Users.php';

$user = new USers();

$listUsers = $user->readAll();
// var_dump($listUsers);

require dirname(__FILE__).'\..\view\UsersList.php';
?>