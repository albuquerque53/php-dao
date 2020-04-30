<?php

require_once('config.php');

/*      Load user by ID
$root = new User;
$root->loadById(1);

echo $root;
*/

/*      Get ALL
$list = User::getAll();

echo json_encode($list);
*/

/*      Search by login
$search = User::search('ro');

echo json_encode($search);
 */

/* Get by login and password
$rob = new User;
$rob->getAuth('rob', 'fast&furious');

echo $rob;
 */

// Insert
$john= new User('john_wick', 'you-kill-ma-dog!!!');
$john->insert();

echo json_encode(User::getAll()); // Check

