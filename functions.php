<?php

function showMessage($name = "Andrew") {
    return "Hello, {$name}!";
}

$andrew_message = showMessage();
echo $andrew_message;
showMessage("Murphy");