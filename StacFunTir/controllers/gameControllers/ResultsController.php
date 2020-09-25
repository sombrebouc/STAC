<?php
session_start();
require_once dirname(__FILE__).'/../../models/Users.php';
require_once dirname(__FILE__).'/../../models/Sessions.php';
require_once dirname(__FILE__).'/../../models/Games.php';

$games = new Game();
$listGames = $games->readAllGames();

require_once dirname(__FILE__).'/../HeaderController.php';
require_once dirname(__FILE__).'/../FooterController.php';