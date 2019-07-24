<?php 
setcookie( "username", $_POST['login'] , time() + 360000, null, null, false, true);
$_COOKIE['username'] = $_POST['login'];

setcookie( "password", $_POST['mdp'], time() + 360000, null, null, false, true);
$_COOKIE['password'] = $_POST['mdp'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    echo $_COOKIE['username']."<br/>";
    echo $_COOKIE['password'];
?>
</body>
</html>