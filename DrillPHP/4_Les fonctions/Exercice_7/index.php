<?php
$counter = 0 ;
for($var = 1;$var<=100;$var += $var+15){
    var_dump('On tient le bon bout');
    $counter++;
    var_dump($counter);
}