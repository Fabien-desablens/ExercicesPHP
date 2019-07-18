<?php
$age = readline('Quelle est votre âge ? : ');
$genre = readline('Etes vous un homme ou une femme ? :');

if($genre == 'homme'){
    $res = 'Vous êtes un homme ';
}else if ($genre == 'femme'){
    $res = 'Vous êtes une femme ';
}

if($age>=18){
    $result = 'et vous êtes majeur';
}else if ($age<18){
    $result = 'et vous êtes mineur.';
};

echo ("$res $result");
