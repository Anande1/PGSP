<?php
if(isset($_SESSION['login'])){     // sécurise l'accès à cette page
    include("vues/v_sommaire.php");
    $action = $_REQUEST['action'];
    switch ($action){
        case  "voirEtatStage" :
            $url = "location: vues/pdf_etatStage.php";
            header($url);
        break;
        case  "voirEtatEntreprise" :
            $url = "location: vues/pdf_etatEntreprises.php";
            header($url);
        break;
    }
}
else
    include("vues/v_connexion.php");

?>