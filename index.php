<?php

require_once('config.php');

/*
// Load user by ID
$root = new User;
$root->loadById(1);

echo $root;
*/

/*
// Get all users
$list = User::getAll();

echo json_encode($list);
*/

/*
// Search user by login
$search = User::search('ro');

echo json_encode($search);
 */

/* 
// Get by login and password
$rob = new User;
$rob->getAuth('rob', 'fast&furious');

echo $rob;
 */

/*
// Insert new user
$john= new User('john_wick', 'you-kill-ma-dog!!!');
$john->insert();

echo json_encode(User::getAll()); // Check
 */

/*
// Update user
$rob = new User();
$rob->loadById(3);
$rob->update('rob', 'toretto123');

echo $rob;
*/

// Delete
$g4br = new User();
$g4br->loadById(2);
$g4br->delete();

echo json_encode(User::getAll()); // Check
