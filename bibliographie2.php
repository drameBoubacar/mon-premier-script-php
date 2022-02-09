<?php
$movies = [
    'JekyllNHyde' => ['Michael Caine', 'Cheryl Ladd', 'Joss Ackland'],
    'Les pirates des mers du Sud' => ['Robert Newton', 'Connie Gilchrist', 'Kit Taylor'],
    'La Planète au trésor : Un nouvel univers' => ['Joseph-gordon-Levitt', 'Martin Short', 'Emma Thomspon']
];

foreach($movies as $title => $actors) {
    echo " Dans le film $title, les principaux acteurs sont : \n";
    foreach($actors as $actors){
        echo "$actors \n";
    }
} 


?>

