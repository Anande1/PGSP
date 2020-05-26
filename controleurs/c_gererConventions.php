<?php
 if(isset($_SESSION['login'])){     // sécurise l'accès à cette page
    $action = $_REQUEST['action'];
    switch ($action){
        case  "voir" :
            include("vues/v_sommaire.php");
            $lesStagiaires = $pdo->getLesStagiairesConvention( $_SESSION['option']);
            include("vues/v_gererConventions.php");
        break;
        
              
        case "ajouter" :
            include("vues/v_sommaire.php");
            $id = $_REQUEST['id'];
            $raisons = $pdo->getLesEntreprises();
            $formateurs = $pdo->getLesFormateurs();
            $stagiaire = $pdo->getLeStagiaire($id);
            include("vues/v_ajouterConvention.php");
        break;
 
        case "enregistrerAjout" :
            include("vues/v_sommaire.php");
                $nomPrenomTuteur = $_REQUEST['nomPrenomTuteur'];
                $telTuteur = $_REQUEST['telTuteur'];
                $mailTuteur = $_REQUEST['mailTuteur'];
                $idStagiaire = $_REQUEST['id'];
                $idEntreprise = $_REQUEST['entreprise'];
                $idFormateur =$_REQUEST['formateur'];
               $idStage = $_SESSION['stage'];
                $res = $pdo->ajoutConvention($nomPrenomTuteur, $telTuteur, $mailTuteur,  $idStagiaire, $idStage, $idEntreprise, $idFormateur);
            if($res != 0)
                $message = "Convention ajoutée";
            else
                $message = "Merci de recommencer ultérieurement";

            include("vues/v_message.php");
            break;
            case "modifier" :
                include("vues/v_sommaire.php");
                $id = $_REQUEST['id'];
                $idConvention = $_REQUEST['idConvention'];
                $_SESSION['idConvention'] = $idConvention;
                $convention = $pdo->getConvention($idConvention);
                $nomPrenomFormateur = $convention['nomPrenomFormateur'];
                $nomPrenomTuteur = $convention['nomPrenomTuteur'];
                $telTuteur = $convention['telTuteur'];
                $mailTuteur = $convention['mailTuteur'];
                $raisonSociale = $convention['raisonSociale'];
                $raisons = $pdo->getLesEntreprises();
                $formateurs = $pdo->getLesFormateurs();
                $stagiaire = $pdo->getLeStagiaire($id);
                include("vues/v_modifierConvention.php");
            break;
            case "enregistrerModifications":
                include("vues/v_sommaire.php");
                $idFormateur = $_REQUEST['formateur'];
                $idEntreprise = $_REQUEST['entreprise'];
                $idConvention =  $_SESSION['idConvention'];
                $mailTuteur = $_REQUEST['mailTuteur'];
                $telTuteur = $_REQUEST['telTuteur'];
                $nomPrenomTuteur = $_REQUEST['nomPrenomTuteur'];
                $res = $pdo->enregModifsConvention($idConvention, $idFormateur,$idEntreprise,$nomPrenomTuteur,$mailTuteur,$telTuteur);
                $convention = $pdo->getConvention($idConvention);
                $nomPrenomFormateur = $convention['nomPrenomFormateur'];
                $idStagiaire = $convention['idStagiaire'];
                $stagiaire = $pdo->getLeStagiaire( $idStagiaire);
                $raisons = $pdo->getLesEntreprises();
                $formateurs = $pdo->getLesFormateurs();
                $raisonSociale = $convention['raisonSociale'];
                include("vues/v_modifierConvention.php");
               
                if($res != 0)
                    $message = "Convention mise à jour";
                else
                    $message = "Merci de recommencer ultérieurement";
                include("vues/v_message.php");
        break;
        case "imprimer":
            $idStage = $_SESSION['stage'];
            $idConvention = $_SESSION['idConvention'];
            $convention = $pdo->getConvention($idConvention);
            $stage = $pdo->getLeStage($idStage);
            $formateur = $convention['nomPrenomFormateur'];
            $idStagiaire = $convention['idStagiaire'];
            $idEntreprise = $convention['idEntreprise'];
            $stagiaire = $pdo->getLeStagiaire($idStagiaire);
            $entreprise = $pdo->getEntreprise($idEntreprise);
            $url = "location: vues/pdf_convention.php?";
            $url.= "formateur=" . $formateur;
            $url .= "&stagiaire=" . serialize($stagiaire); // pour faire passer un tableau dans l'url
            $url .=  "&entreprise=" . serialize($entreprise);
            $url .= "&stage=" . serialize($stage);
            $url .= "&convention=" . serialize($convention);
            header($url);
         break;
    }
}
else
    include("vues/v_connexion.php");
?>