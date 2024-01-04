<?php

$coffee_menu = array("Latte", "Black Coffee", "Cortado");
$pastries = ['donut', "bagel", 'biscuit'];


var_dump($coffee_menu);
// array(3) { [0]=> string(5) "Latte" [1]=> string(12) "Black Coffee" [2]=> string(7) "Cortado" }
echo $coffee_menu[1]; // just prints black coffee

// Associative arrays
$articles = [
    "first" => "First Post", 
    "second" => "Second Post", 
    "third" => "Third Post"
];

var_dump($articles);
//  { ["first"]=> string(10) "First Post" ["second"]=> string(11) "Second Post" ["third"]=> string(10) "Third Post" }
echo $articles["second"];


$values = [
    "message" => "Hello PHP",
    "count" => 150,
    "status" => false,
    "result" => null,
];
var_dump($values);

// Mixing variales into an array
$product = "coffee";
$inventory = 100;
$price = 2.99;

$black_coffee = [$product, $inventory, $price];

var_dump($black_coffee);

// Multidimensional arrays (arrays in an array)
$drip = [
    "name" => "Black Coffee",
    "price" => 2.99,
    "inventory" => 1000,
];
$latte = [
    "name" => "Latte",
    "price" => 4.99,
    "inventory" => 500,
];
$cortado = [
    "name" => "Cortado",
    "price" => 3.99,
    "inventory" => 750,
];

$menu = [
    $drip,
    $latte,
    $cortado,
];

$cortado_price = $menu[2]["price"];

var_dump($menu);