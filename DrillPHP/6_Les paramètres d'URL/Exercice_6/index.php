<?php
if (isset($_GET['batiment']) AND isset($_GET['salle'])) // On a le batiment et la salle
{
	echo $_GET['batiment'] . ' ' . $_GET['salle'] ;
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner un nom et un prénom !';
}
?>