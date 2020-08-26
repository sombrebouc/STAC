<?php
session_start();

require_once dirname(__FILE__).'\HeaderController.php';
require_once dirname(__FILE__).'\..\model\Users.php';

    $_SESSION['id'] = $_POST['id'];
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['license'] = $_POST['license'];
    $_SESSION['password'] = $_POST['password'];

require_once dirname(__FILE__).'\..\view\UsersProfile.php';