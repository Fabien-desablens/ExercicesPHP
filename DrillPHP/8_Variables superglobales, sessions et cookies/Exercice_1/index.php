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
    var_dump ($_SERVER['HTTP_USER_AGENT']);
    echo "<br>";
    var_dump ($_SERVER['REMOTE_ADDR']);
    echo "<br>";
    var_dump($_SERVER['SERVER_NAME']) ;
    ?>
</body>
</html>