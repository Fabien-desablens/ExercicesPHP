<?php
$genre=readline('Etes vous un homme ou une femme ? :');
$age=readline('Quel âge avez-vous ? :');
function a($age,$genre){
    if($age<18){
        $string2 = "et vous êtes mineur";
    }else if ($age>=18){
        $string2 = "et vous êtes majeur";
    }
    if ($genre="homme"){
        $string1 = "Vous êtes un homme ";
    }else {
        $string1 = "Vous êtes une femme ";
    }
    echo($string1 . $string2);
}
a($age,$genre);