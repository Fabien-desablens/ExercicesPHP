<?php
$var1 = 0;
$var2 = rand(0,100);


for($i = 0; $i < 20; $i++){
    $result = $var1*$var2;
    var_dump($result);
    $var1++;
};