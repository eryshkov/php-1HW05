<?php

function getUsersList()
{
    $users = include __DIR__ . '/users.php';
    return $users;
}

function existsUser($login): bool
{
    $users = getUsersList();
    return isset($users[$login]);
}