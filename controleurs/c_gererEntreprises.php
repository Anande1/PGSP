<?php
 if(isset($_SESSION['login'])){     // sécurise l'accès à cette page
    include("vues/v_sommaire.php");
    $action = $_REQUEST['action'];
    switch ($action){
        case  "voir" :
            $lesEntreprises = $pdo->getLesEntreprises();
            include("vues/v_gererEntreprises.php");
        break;
        case "ajouter" :
            include("vues/v_ajouterEntreprise.php");
        break;
        case "enregistrerAjout" :
            $raison = $_REQUEST['raisonSociale'];
            $adresse = $_REQUEST['adresse'];
            $tel = $_REQUEST['telResponsable'];
            $nomPrenom = $_REQUEST['nomPrenomResponsable'];
            $mail = $_REQUEST['mailResponsable'];
            $res = $pdo->ajouterEntreprise($raison, $adresse, $tel, $nomPrenom, $mail);
            if($res != 0){
                $message = "Entreprise ajoutée";
            }
            else{
                $message = "Merci de recommencer ultérieurement";
            }
            include("vues/v_message.php");
        break;
        case "modifier" :
            $id = $_REQUEST['id'];
            $ligne = $pdo->getEntreprise($id);
            $raison = $ligne['raisonSociale'];
            $adresse = $ligne['adresse'];
            $nomPrenom = $ligne['nomPrenomResponsable'];
            $mail = $ligne['mailResponsable'];
            $telephone = $ligne['telResponsable'];
            include("vues/v_modifierEntreprise.php");
            break;
            
            case "enregistrerModif" :
                $id=$_REQUEST['id'];
                $raisonSociale = $_REQUEST['raisonSociale'];
                $nomPrenom = $_REQUEST['nomPrenomResponsable'];
                $tel = $_REQUEST['telResponsable'];
                $mail = $_REQUEST['mail'];
                $adresse = $_REQUEST['adresse'];
                $res = $pdo->modifierEntreprise($id ,$raisonSociale ,$nomPrenom ,$tel ,$mail ,$adresse);
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