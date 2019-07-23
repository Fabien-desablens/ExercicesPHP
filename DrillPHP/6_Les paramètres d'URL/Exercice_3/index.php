<?php
if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])) // On a la date de début et de fin
{
	echo  $_GET['dateDebut'] . ' ' . $_GET['dateFin'];
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner des dates !';
}
?>