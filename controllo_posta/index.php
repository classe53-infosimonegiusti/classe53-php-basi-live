<?php

$email = $_GET['email'];

if (strpos($email, '@') !== false && strpos($email, '.') !== false) {
    echo "L'indirizzo email potrebbe essere valido!"; 
} else {
    echo "Indirizzo email non valido!";
}


