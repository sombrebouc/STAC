<?php
session_start();
require_once dirname(__FILE__).'/../models/Users.php';
require_once dirname(__FILE__).'/../models/Sessions.php';
require_once dirname(__FILE__).'/../models/Games.php';

$deleteUserSuccess = false;

if(isset($_GET['id'])){
    $id = (int) $_GET['id'];
    $user = new User($id);
    $userInfos = $user->readOneUser();
    $fullName = $userInfos->lastname.' '.$userInfos->firstname;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //var_dump($_POST['id']);
    $id = (int) $_POST['id'];
    $user = new User($id);
            //var_dump($user);
        if($user->delete()){
            //var_dump($user);
            $deleteUserSuccess = true;
            header("Refresh: 1;url=/controllers/UsersListController.php");
        }
}

require_once dirname(__FILE__).'/HeaderController.php';
require_once dirname(__FILE__).'/../views/UserDelete.php';
require_once dirname(__FILE__).'/FooterController.php';