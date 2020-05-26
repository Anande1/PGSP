<?php
if(!isset($_REQUEST['action']))
    $_REQUEST['action'] = 'demandeConnexion';

$action = $_REQUEST['action'];

switch ($action)
{
    case 'demandeConnexion' :
        include("vues/v_connexion.php");
        break;
    case 'changerStageOuOption' :
        $lesStages = $pdo->getLesIdStages();
        $optionActuelle = "";
        $stageActuel = "";
        if(isset($_SESSION['option'] )){
            $optionActuelle = $_SESSION['option'];
        }
        if(isset($_SESSION['stage'] )){
            $stageActuel = $_SESSION['stage'];
            }
        include ('vues/v_choixStage.php'); 
        break;
    case 'controler':
        $login = $_REQUEST['login'];
        $mdp = $_REQUEST['mdp'];
        $user = $pdo->getUser($login,$mdp);
        if($user == null){
            include("vues/v_connexion.php");
            $message = "Erreur de login et/ou de mot de passe ";
            include("vues/v_message.php");
        }
        else{
            $_SESSION['login'] = $login;
            $lesStages = $pdo->getLesIdStages();
            $stageActuel = "";
            $optionActuelle = "";
            include ('vues/v_choixStage.php'); 
        }
        break;
    case  'afficherMenu' :
        if(isset($_SESSION['login'])){
            $_SESSION['option'] = $_REQUEST['choixOption'];
            $_SESSION['stage'] = $_REQUEST['choixStage'];
            include ('vues/v_sommaire.php'); 
        }
        else
            include("vues/v_connexion.php"); 
        break;
    case 'deconnexion' :
        session_destroy();
        include("vues/v_connexion.php");
        break;
    default : 
        include("vues/v_connexion.php");

}
