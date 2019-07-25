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
    $now = time(); // or your date as well
    $your_date = strtotime("16-05-2016");
    $datediff = $now - $your_date;
    
    echo round($datediff / (60 * 60 * 24));
    ?>
</body>
</html>