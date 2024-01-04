<?php

require 'classUsers.php';
require 'classStudent.php';

var_dump(Users::$count);

$murphy = new Users('Murphy', 2);
// $murphy->name = 'Murphy';
// $murphy->age = 2;

$andrew = new Users('Andrew', 29);
// $andrew->name = 'Andrew';
// $andrew->age = 29;

$kate = new Users('kate', 28);
// var_dump($kate);

// var_dump($murphy->name, $murphy->age);
// var_dump($andrew);

// $andrew->sayHello();
// echo $andrew->getName();
echo $andrew->getAddress();
$andrew->setAddress('Marin');
echo $andrew->getAddress();

var_dump(Users::$count);

// Constant 
define ('MAX', 100);
define ('COLOR', 'blue');
echo MAX;
echo COLOR;

// Constant within the Users class
echo Users::MAX_AGE;

$henry = new Student('Henry', 20);

var_dump($henry);