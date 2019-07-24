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
    if(isset($_POST['civilité']) AND (isset($_POST['prénom'])) AND (isset($_POST['nom'])) AND (file_exists['monfichier']['name']) AND ($_FILES['monfichier']['type'])){
        echo'Les données ont bien été enregistrées.';
        echo $_FILES['monfichier']['name'] .' '. $_FILES['monfichier']['type'];
    }else{
        echo '
        <form action=\'index.php\' method=\'POST\' enctype="multipart/form-data">
        <select name="civilité">
            <option>monsieur
            <option>madame
        </select>
        <label>Prénom:<input type="text"  name=\'prénom\'></label>
        <label>Nom:<input type="text" name=\'nom\'></label>
        <input type="hidden" name="MAX_FILE_SIZE" value="100000" />Transferer un fichier 
        <input type="file" name="monfichier" />
        <input type=\'submit\'></input>
    </form>
    ';
    }
    ?>
</body>
</html>