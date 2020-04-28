<?php

require_once('config.php');

/*
    Load all users

$sql = new Database();

$users = $sql->select('select * from users');

echo json_encode($users);
 */

$root = new User;
$root->loadById(1);

echo $root;

