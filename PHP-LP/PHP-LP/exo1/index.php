<?php
require_once __DIR__ . '/User.php';

$user = new User('BCERATI', 'jEaN-pIeRe', 'jean-Cerati');
//
//$user
//    ->setUsername('BCERATI')
//    ->setFirstName('Boris')
//    ->setLastName('Cerati');


echo $user->getUsername() . '<br>';
echo $user->getFirstName() . '<br>';
echo $user->getLastName();
