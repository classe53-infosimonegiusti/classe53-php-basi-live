<?php


$variabile = 5;

//gli if sono identici a js!

if ($variabile == 5) {
    echo 'Variabile vale 5';
} else {
    echo 'La variabile non vale 5';
}

$secondaVariabile = 10;

//piccole differenze per concatenazione e somma
$perFareLaSomma = $variabile + $secondaVariabile;

$perFareUnaConcatenazione = $variabile . $secondaVariabile;


//e come si possono stampare le stringhe
echo "<h1>Somma: " . $perFareLaSomma . "</h1>";

echo "<h1>Somma: $perFareLaSomma </h1>"; //simile ad interpolazione con backtick in js, solo con "  apici doppi

echo '<h1>Concatenazione: $perFareUnaConcatenazione </h1>'; //non posso fare interpolazione con '