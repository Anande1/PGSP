<?php
 if(isset($_SESSION['login'])){     // sécurise l'accès à cette page
    include("vues/v_sommaire.php");
    $action = $_REQUEST['action'];
    switch ($action){
        case  "voir" :
            $lesStages = $pdo->getLesStages();
            include("vues/v_gererStages.php");
        break;
        case "ajouter" :
            include("vues/v_ajouterStage.php");
        break;
        case "enregistrerAjout" :
            $id = $_REQUEST['id'];
            $debut = $_REQUEST['debut'];
            $fin = $_REQUEST['fin'];
            $res = $pdo->ajouterStage($id, $debut, $fin );
            if($res != 0){
                $message = "stage ajouté";
            }
            else{
                $message = "Merci de recommencer ultérieurement";
            }
            include("vues/v_message.php");
        break;
        case "enregistrerModifs" :
            $id=$_REQUEST['id'];
            $debut = $_REQUEST['debut'];
            $fin = $_REQUEST['fin'];
            $res = $pdo->modifierStages($id,$debut, $fin);
            if($res != 0){
                $message = "modification(s) éffectuée(s)";
            }
            else{
                $message = "Pas de modification(s) effectuée(s)";
            }
                include("vues/v_message.php");
            break;
    }
 }
 else
    include("vues/v_connexion.php");

?>