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
    if(isset($_POST['civilité']) AND (isset($_POST['prénom'])) AND (isset($_POST['nom']))){
        echo'Les données ont bien été enregistrées.';
    }else{
        echo '
        <form action=\'index.php\' method=\'POST\'>
        <select name="civilité">
            <option>monsieur
            <option>madame
        </select>
        <label>Prénom:<input type="text"  name=\'prénom\'></label>
        <label>Nom:<input type="text" name=\'nom\'></label>
        <input type=\'submit\'></input>
    </form>
    ';
    }
    ?>
</body>
</html>