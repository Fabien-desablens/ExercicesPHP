<?php
$départements = [
    01 => 'Ain',
    03 => 'Allier',
    07 => 'Ardèche',
    15 => 'Cantal',
    26 => 'Drôme',
    38 => 'Isère',
    42 => 'Loire',
    43 => 'Haute-Loire',
    63 => 'Puy-de-Dôme',
    69 => 'Rhône',
    73 => 'Savoie',
    74 => 'Haute-Savoie',
];
$départements[53]= 'Mozelle';
print_r($départements);

foreach($départements as $value=>$key){
    echo("Le département $key a le numéro $value");
}