<?php
$res = readline('Quelle est l\'échelle ? : ');

switch($res){
    case 1:
        echo('Micro-séisme impossible à ressentir.');
    case 2:
        echo('Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.');
    case 3:
        echo('Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.');
    case 4:
        echo('Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.');
    case 5:
        echo('Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.
        ');
    case 6:
        echo('Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.');
    case 7:
        echo('Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.');
    case 8:
        echo('Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.');
    case 9:
        echo('Séisme capable de tout détruire sur une très vaste zone.
        ');
}