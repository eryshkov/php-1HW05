<?php

function getUsersList()
{
    $users = include __DIR__ . '/users.php';
    return $users;
}

assert(false !== (bool)getUsersList());

function existsUser($login): bool
{
    $users = getUsersList();
    return isset($users[$login]);
}

assert(true === existsUser('eug'));
assert(true === existsUser('tmp'));
assert(true === existsUser('admin'));
//assert(true === existsUser('none'));

