<?php

$array = ['pippo', 'pluto', 'paperino'];


// php corretto
for ($i=0; $i < count($array); $i++) {
    echo $array[$i] . '<br>';
}


$c = 0;

while ($c < 10) {
    echo "<p>$c</p>";
    $c++;
}


