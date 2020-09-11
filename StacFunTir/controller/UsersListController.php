<?php 
session_start();
require_once dirname(__FILE__).'\..\model\Users.php';
require_once dirname(__FILE__).'\HeaderController.php';

$user = new User();
$listUsers = $user->readAll();

require dirname(__FILE__).'\..\view\UsersList.php';