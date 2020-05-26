<?php
 if(isset($_SESSION['login'])){     // sécurise l'accès à cette page
    include("vues/v_sommaire.php");
    $action = $_REQUEST['action'];
    switch ($action){
        case  "voir" :
            $lesStagiaires = $pdo->getLesStagiaires( $_SESSION['option']);

            include("vues/v_gererStagiaires.php");
        break;
        case "ajouter" :
            $lesPromotions = array("1"=>"2019","2"=>"2020", "3"=>"2021", "4"=>"2022") ;
            include("vues/v_ajouterStagiaire.php");
        break;
        case "enregistrerAjout":
            $nom = $_REQUEST['nom'];
            $prenom = $_REQUEST['prenom'];
            $tel = $_REQUEST['tel'];
            $promotion = $_REQUEST['promotion'];
            $mail = $_REQUEST['mail'];
            $adresse = $_REQUEST['adresse'];
            $res = $pdo->ajouterStagiaire($nom, $prenom, $tel,$mail ,$promotion, $adresse);
            if($res != 0)
                $message = "stagiaire ajouté";
            else
                $message = "Merci de recommencer ultérieurement";
            
            include("vues/v_message.php");
        break;
        case "modifier" :
            
            $id = $_REQUEST['id'];
            $ligne = $pdo->getLeStagiaire($id);
            $nom = $ligne['nom'];
            $prenom = $ligne['prenom'];
            $mail = $ligne['mail'];
            $telephone = $ligne['telephone'];
            $adresse = $ligne['adresseS'];
            $lesPromotions = array("1"=>"2019","2"=>"2020", "3"=>"2021", "4"=>"2022") ;
            include("vues/v_modifierStagiaire.php");
            break;
        case "enregistrerModif" :
            
            $id=$_REQUEST['id'];
            $nom = $_REQUEST['nom'];
            $prenom = $_REQUEST['prenom'];
            $tel = $_REQUEST['tel'];
            $mail = $_REQUEST['mail'];
            $promotion = $_REQUEST['promotion'];
            $adresse = $_REQUEST['adresse'];
            $res = $pdo->modifierStagiaire($id,$nom,$prenom ,$tel,$mail,$promotion, $adresse);
            if($res != 0)
                $message = "modification(s) éffectuée(s)";
            else
                $message = "Pas de modification(s) effectuée(s)";
            
            include("vues/v_message.php");
            break;

            
    }


 }
 else
    include("vues/v_connexion.php");

?>