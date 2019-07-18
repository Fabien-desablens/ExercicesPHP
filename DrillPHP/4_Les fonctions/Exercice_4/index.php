<?php
$a = rand(1,10);
echo($a);
$b = rand(1,10);
echo($b);
function test($a,$b)
{
    if($a>$b){
        echo('Le premier est plus grand');
    }else if($a<$b){
        echo('Le premier est plus petit');
    }else{
        echo('Ils sont identiques');
    }
};

$func = test($a,$b);
echo($func);