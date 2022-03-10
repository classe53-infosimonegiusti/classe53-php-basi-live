<?php

$listaDiParole = ['pane', 'latte', 'uova'];


if (!empty($_GET['parola'])) {

    $parola = $_GET['parola'];

    if (in_array($parola, $listaDiParole)) {
        echo 'La parola è presente!'; 
    } else {
        echo "L'array non contiene la parola!";
    }

} else {

    echo 'Parola ricercata mancante!';

}
