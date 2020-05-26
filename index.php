<?php
include("data/class.PDOpgsp.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoPgsp::getPdoPgsp();
$estConnecte = isset($_SESSION['login']);
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':
		include("controleurs/c_connexion.php");
		break;
	case 'gererStagiaires' :
		include("controleurs/c_gererStagiaires.php");
		break;
	case 'gererEntreprises' :
		include("controleurs/c_gererEntreprises.php");
		break;
	case 'gererFormateurs' :
		include("controleurs/c_gererFormateurs.php");
		break;
	break;
	case 'gererConventions' :
		include("controleurs/c_gererConventions.php");
	break;
	case 'gererStages' :
		include("controleurs/c_gererStages.php");
	break;
	case 'gererEtats' :
		include("controleurs/c_gererEtats.php");
	break;

}
include("vues/v_pied.php") ;
?>

