<?php
session_start();
require_once dirname(__FILE__).'\..\models\Users.php';
require_once dirname(__FILE__).'\HeaderController.php';

if(isset($_GET['id'])){
    $id = (int) $_GET['id'];
    $user = new User($id);
    $userInfos = $user->readSingle();
    $fullName = $userInfos->lastname.' '.$userInfos->firstname;

}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = (int) $_POST['id'];
    $user = new User($id);
    var_dump($user);
        if($user->delete()){
            $deleteUserSuccess = true;
            header('location:UsersListController.php');
        }
}

require_once dirname(__FILE__).'\..\views\UserDelete.php';
require_once dirname(__FILE__).'\FooterController.php';