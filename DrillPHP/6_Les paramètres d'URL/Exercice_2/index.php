<?php
if (isset($_GET['age'])) // On a l'âge
{
	echo  $_GET['age'];
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner un âge !';
}
?>