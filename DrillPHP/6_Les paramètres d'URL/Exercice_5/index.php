
<?php
if (isset($_GET['semaine'])) // On a la semaine
{
	echo $_GET['semaine'] .' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner un nom et un prénom !';
}
?>