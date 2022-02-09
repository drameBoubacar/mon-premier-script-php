<?php
$books = [
    "La flèche noire" => 1883,
    "Enlevé" => 1886,
    "Catriona" => 1893
];

asort($books);

foreach($books as $titleBook => $date) {
    echo " > $date - $titleBook";
}

?>