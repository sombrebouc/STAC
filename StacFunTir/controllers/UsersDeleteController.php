<?php
session_start();
require_once dirname(__FILE__).'\..\models\Users.php';
require_once dirname(__FILE__).'\..\models\Sessions.php';
require_once dirname(__FILE__).'\..\models\Games.php';
require_once dirname(__FILE__).'\HeaderController.php';

$deleteUserSuccess = false;

if(isset($_GET['id'])){
    $id = (int) $_GET['id'];
    $user = new User($id);
    $userInfos = $user->readSingle();
    $fullName = $userInfos->lastname.' '.$userInfos->firstname;

}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = (int) $_POST['id'];
    $user = new User($id);
        if($user->delete()){
            var_dump($user);
            $deleteUserSuccess = true;
            header('location:UsersListController.php');
        }
}

require_once dirname(__FILE__).'\..\views\UserDelete.php';
require_once dirname(__FILE__).'\FooterController.php';