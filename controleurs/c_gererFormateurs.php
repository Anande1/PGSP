<?php
 if(isset($_SESSION['login'])){     // sécurise l'accès à cette page
    include("vues/v_sommaire.php");
    $action = $_REQUEST['action'];
    switch ($action){
        case  "voir" :
            $lesFormateurs = $pdo->getLesFormateurs();
            include("vues/v_gererFormateurs.php");
        break;
        case "ajouter" :
            include("vues/v_ajouterFormateur.php");
        break;
        case "enregistrerAjout" :
            $nomPrenom = $_REQUEST['nomPrenom'];
            $res = $pdo->ajouterFormateur($nomPrenom);
            if($res != 0){
                $message = "Formateur ajouté";
            }
            else{
                $message = "Merci de recommencer ultérieurement";
            }
            include("vues/v_message.php");
        break;
        
        case "modifier" :
            $id = $_REQUEST['id'];
            $nomPrenom = $_REQUEST['nomPrenom'];
            include("vues/v_modifierFormateur.php");
            break;
            
            case "enregistrerModif" :
                $id=$_REQUEST['id'];
                $nomPrenom = $_REQUEST['nomPrenom'];
                $res = $pdo->modifierFormateur($id ,$nomPrenom );
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