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
    $Date = "2019-07-25";
    echo date('Y-m-d', strtotime($Date. ' + 20 days')). ' ';
    echo date('Y-m-d', strtotime($Date. ' - 22 days'));
    ?>
</body>
</html>