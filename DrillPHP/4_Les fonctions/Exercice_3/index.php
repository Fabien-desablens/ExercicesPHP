<?php
function a ($string1 ="Hello "){
    return $string1;
};
function b ($string2 ="world"){
    return $string2;
};
$func=a($string1 ="Hello ") . b($string2 ="world");
echo($func);