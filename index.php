<?php

use Access\Controller\UserController;

require_once 'vendor/autoload.php';

// Controller Instance
$user = new UserController();

/*
// All users
$list = $user->index();

echo json_encode($list);
*/

/*
// Get by ID
$userOne = $user->show(1);
  
echo json_encode($userOne);
*/

/*
// Search user by login
$search = $user->search('ro');

echo json_encode($search);
 */

/*
// Insert new user
$user->store('John Wick', 'you-killed-ma-dog!!!');

echo json_encode($user->index()); // Check
 */

/*
// Update user
$user->update(2, 'John Wick', 'you-killed-ma-dog!!!');

echo json_encode($user->index());
*/

/*
// Delete
$user->destroy(7);

echo json_encode($user->index()); // Check
*/

