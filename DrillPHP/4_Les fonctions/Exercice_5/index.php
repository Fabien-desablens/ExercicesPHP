<?php
//Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui retourne la concaténation de ces deux paramètres.
function test ($a = 1, $b ='chaine'){
    return $a . $b;
}
$func = test($a = 1, $b ='chaine');
echo($func);