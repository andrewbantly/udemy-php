<?php

$menu = ["Latte", "Black Coffee", "Cortado"];

if (empty($menu)) {
    echo "There are no items on the menu.";
} else {
    echo "Nice menu!";
}

$hour = 21;

if ($hour < 12) {
    echo "Good morning.";
} elseif ($hour < 18) {
    echo "Good afternoon.";
} elseif ($hour < 22) {
    echo "Good evening.";
} else {
    echo "Good night.";
}

$day = "Sat";

switch ($day) {
    case "Mon":
        echo "Monday";
        break;
    case "Tue":
        echo "Tuesday";
        break;
    case "Wed":
        echo "Wednesday";
        break;
    case "Thu":
        echo "Thursday";
        break;
    case "Fri":
        echo "Friday";
        break;
    default:
        echo "The weekend.";
}