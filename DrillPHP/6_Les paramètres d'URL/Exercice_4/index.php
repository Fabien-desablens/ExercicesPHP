<?php
if (isset($_GET['langage']) AND isset($_GET['serveur'])) // On a le langage et le serveur
{
	echo $_GET['langage'] . ' ' . $_GET['serveur'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner un langage et un serveur !';
}
?>