<?php

declare(strict_types=1);
error_reporting(-1);
ini_set('display_errors', 'On');

require_once 'Dao.php';

$dao = new Dao();

function input_empty(string $user, string $pwd, $goal): bool
{
    if (empty($user) || empty($pwd) || empty($goal)) {
        return true;
    } else {
        return false;
    }
}

function used_username($user): bool
{
    if ($dao->getUsername($user) != null) {
        return true;
    } else {
       return false;
    }
}

