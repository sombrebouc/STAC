<?php

require('model.php');

function listUsers()
{
    $members = getMembers();

    require('usersList.php');
}

function user()
{
    $user = getUSer($_GET['id']);

    require('\..\view\funtir\user.php');
}