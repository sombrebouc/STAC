<?php 
session_start();
require_once dirname(__FILE__).'/../../models/Users.php';
require_once dirname(__FILE__).'/../../models/Sessions.php';
require_once dirname(__FILE__).'/../../models/Games.php';
require_once dirname(__FILE__).'/../HeaderController.php';

$user = new User();
$listUsers = $user->readAll();

require dirname(__FILE__).'/../../views/gameViews/ValidationList.php';
require_once dirname(__FILE__).'/../FooterController.php';