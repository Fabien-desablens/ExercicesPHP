<?php
function test($age=20,$nom="Paul",$prenom="Jean"){
    echo("Bonjour $nom $prenom, tu as $age ans");
}
$func=test();
echo($func);