<?php
require_once __DIR__ . '/user2.php';


$dataUser=[
    'username' => 'Username',
    'firstName' => 'Firstname',
    'lastName' => 'lastName',
    'email' => 'Valentin@orange.fr',
    'address' => '1 rue des canes',
    'phone' => '0613084565',
    'birthDate' => new Datetime('1999-09-29'),
];

print_r($dataUser);
$user = new user2($dataUser);


echo $user->showInfos();



