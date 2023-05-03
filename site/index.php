<?php
session_start();
// require_once("model/class.pdo.inc.php");
include("view/v_layout_entete.php") ;
if(!isset($_REQUEST['controleur']))
     $controleur = 'accueil';
else
	$controleur = $_REQUEST['controleur'];
// $laConnexion = PdoBdvente::getPdobdOpetit();	 
switch($controleur)
{
	case 'accueil':
		{include("view/v_accueil.php");break;}
	case 'gererDonnees': 
		{include ("controller/c_gererDonnees.php");break;}

}
include("view/v_layout_pied.php") ;

?>

