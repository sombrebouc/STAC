<?php
session_start();
require_once dirname(__FILE__).'\..\models\Users.php';
require_once dirname(__FILE__).'\HeaderController.php';
   
$user = new User();
$listUsers = $user->readProfile();


require_once dirname(__FILE__).'\..\views\UsersProfile.php';
require_once dirname(__FILE__).'\FooterController.php';