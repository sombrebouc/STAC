<?php 
session_start();
require_once dirname(__FILE__).'\..\models\Users.php';
require_once dirname(__FILE__).'\HeaderController.php';

$user = new User();
$listUsers = $user->readAll();

require dirname(__FILE__).'\..\views\UsersList.php';
require_once dirname(__FILE__).'\FooterController.php';