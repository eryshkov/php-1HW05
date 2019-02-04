<?php

function getUsersList()
{
    $users = include __DIR__ . '/users.php';
    return $users;
}