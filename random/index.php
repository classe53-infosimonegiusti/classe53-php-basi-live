<?php

$min = 10;
$max = 30;
$elements = 15;
$array = [];

if ($elements <= $max - $min + 1) {
    while (count($array) < $elements) {
        $number = rand($min, $max);
        if (!in_array($number, $array)) {
            $array[] = $number;
        }
    }
    
    var_dump($array);
    
} else {
    echo "Parametri non validi!";
}

