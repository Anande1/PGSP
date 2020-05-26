<?php
session_start();
require_once '../data/class.PDOpgsp.php';
$pdo = PdoPgsp::getPdoPgsp();
$idStage = $_SESSION['stage'];
$option = $_SESSION['option'];
$conventions = $pdo->getLesConventions($idStage, $option);
require_once '../vendor/autoload.php';
ob_start();
require_once '../vues/v_etatStage.php';
$content = ob_get_clean();
use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf("L", "A4", "en");
$html2pdf->writeHTML($content);
$html2pdf->output();
?>