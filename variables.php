<?php

// $ initiates a variable
// variables don't have a case type but are case sensative

$product = "Vanilla latte";
$count = 4;
$price = 1.33;
$is_good = true;
$is_not_good = !$is_good;
$needs_restock = false;


var_dump($product); // details type and value
var_dump($count);
var_dump($price);
var_dump($is_good, $needs_restock);
var_dump($is_not_good);
var_dump($is_not_good or $is_good);
var_dump($is_not_good and $is_good);

echo $product . " " . $count;
echo "Does Andrew like $product? $is_not_good";
echo "Yes andrew likes {$product}s."; // use brackets to seperate where the vraible ends

