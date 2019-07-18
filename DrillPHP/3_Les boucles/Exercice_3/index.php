<?php
$first = 100;
$second = rand(1,100);

for($first; $first > 10 ; $first--){
    $result = $first*$second;
    var_dump($result);
}

