<?php

require_once('config.php');

$sql = new Database();

$users = $sql->select('select * from users');

echo json_encode($users);

