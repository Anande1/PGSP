<?php 
$stagiaire = unserialize($_REQUEST['stagiaire']); // pour récupérer le tableau passé dans l'url
$entreprise = unserialize($_REQUEST['entreprise']);
$stage = unserialize($_REQUEST['stage']);
$convention = unserialize($_REQUEST['convention']);
$formateur = $_REQUEST['formateur'];
$site = "http://" . $_SERVER['SERVER_NAME'] . "/pgsp/images/"; //localhost
//$site = "http://" . $_SERVER['SERVER_NAME'] . "/pgsp/images/"; // ovh
require_once '../data/class.PDOpgsp.php';
$pdo = PdoPgsp::getPdoPgsp();
require_once '../vendor/autoload.php';
ob_start();
require_once '../vues/v_convention.php';
$content = ob_get_clean();
use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($content);
$html2pdf->output();
?>






