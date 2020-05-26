<?php
/** 
 * Classe d'accès aux données. 
 
 * Utilise les services de la classe PDO
 * pour l'application pgsp
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoGsb qui contiendra l'unique instance de la classe
 *
 * @package default
 * @author Anande
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoPgsp
{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=pgsp';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
		private static $monPdo;
		private static $monPdoPgsp = null;

		
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
	{
        self::$monPdo = new PDO(self::$serveur.';'.self::$bdd, self::$user, self::$mdp); 
        self::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		self::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * Appel : $instancePdoPgsp = self::getPdoHtAuto();
 * @return l'unique objet de la classe PdoHtAuto
 */
	public  static function getPdoPgsp()
	{
		if(self::$monPdoPgsp == null)
		{
			self::$monPdoPgsp = new PdoPgsp();
		}
		return self::$monPdoPgsp;  
	}

/**
 * Retourne l'utilisateur connecté sous forme d'un tableau associatif
 *
 * @return l'utisateur 
*/        
    public function getUser($login,$mdp)
        {
            $req = "select * from gestionnaire where login = '" . $login . "' and mdp = '" . $mdp . "'";
            $res =  self::$monPdo->query($req);
            $ligne= $res->fetch();
            return $ligne;
        }
/**
 * Retourne les id de tous les stages
 *
 * @return les id 
*/        
public function getLesIdStages()
{
	$req = "select id from stage";
	$res =  self::$monPdo->query($req);
	$lesLignes = $res->fetchAll();
	return $lesLignes;
}
/**
 * Retourne le stage à partir de son id
 * 
 * @return le stage
*/        
public function getLeStage($idStage)
{
	$req = "select *  from stage where id = '" . $idStage ."'" ;
	$res =  self::$monPdo->query($req);
	$laLigne = $res->fetch();
	return $laLigne;
}
/**
 * Retourne les stagiaires d'une option et d'une promotion
 *
 * @return les id, nom et prenom des stagiaires 
*/        
public function getLesStagiaires($option)
{
	$promotion = substr($_SESSION['stage'], 0, 4);
	$req = "select id, nom, prenom  from stagiaire where optionS = '" . $option . "'";
	$req .= " and promotion = '" . $promotion . "'";
	$res =  self::$monPdo->query($req);
	$lesLignes = $res->fetchAll();
	return $lesLignes;
}

/**
 * Retourne le stagiaire par id
 * @param l'id du stagiaire
 * @return tous les champs 
*/        
public function getLeStagiaire($id)
{
	$req = "select * from stagiaire where id = '" . $id . "'";
	$res =  self::$monPdo->query($req);
	$laLigne = $res->fetch();
	return $laLigne;
}
/**
 * Ajoute un stagiaire
 *
 * @return si la requête s'est bien effectuée
*/
public function ajouterStagiaire($nom, $prenom, $tel, $mail, $promotion, $adresse){
	$option = $_SESSION['option'];
	$req = "insert into stagiaire(nom, prenom, telephone, mail, promotion, optionS, adresseS)  values('$nom', '$prenom', '$tel', '$mail', '$promotion','$option','$adresse')";
	$res = self::$monPdo->exec($req);
	return $res;
}
/**
 * mise à jour d'un stagiaire
 *
 * @return si la requête s'est bien effectuée
*/
public function modifierStagiaire($id,$nom,$prenom ,$tel,$mail,$promotion, $adresse){
	$req = "update stagiaire set nom = '" . $nom ."'";
	$req .= ", prenom = '" . $prenom ."'";
	$req .= ", mail = '" . $mail ."'";
	$req .= ", telephone = '" . $tel ."'";
	$req .= ", promotion = '" .$promotion ."'";
	$req .= ", adresseS = '" .$adresse ."'";
	$req .= " where id = " . $id;
	$res = self::$monPdo->exec($req);
	return $res;
}

/**
 * Retourne les entreprises d'une option
 *
 * @return les id, raison sociale et adresse des entreprises 
*/        
public function getLesEntreprises()
{
	$req = "select * from entreprise ";
	$res =  self::$monPdo->query($req);
	$lesLignes = $res->fetchAll();
	return $lesLignes;
}
/**
 * Ajoute une entreprise
 *
 * @return si la requête s'est bien effectuée
*/
public function ajouterEntreprise($raison, $adresse, $tel, $nomPrenom, $mail){
	$req = "insert into entreprise(raisonSociale, adresse, telResponsable, mailResponsable, nomPrenomResponsable)  values('$raison', '$adresse', '$tel', '$mail', '$nomPrenom' )";
	$res = self::$monPdo->exec($req);
	return $res;

}

/**
 * Retourne une entreprise par id
 * @param l'id de l'entreprise
 * @return tous les champs 
*/
public function getEntreprise($id)
{
    $req = "select * from entreprise where id = '" . $id . "'";
    $res =  self::$monPdo->query($req);
    $laLigne = $res->fetch();
    return $laLigne;
}
/**
 * Modifie une entreprise
 * @param les champs l'entreprise
 * @return si la requête s'est bien passée
*/
public function modifierEntreprise($id ,$raisonSociale ,$nomPrenom ,$tel ,$mail ,$adresse){
	$req = "update entreprise set raisonSociale = '" . $raisonSociale ."'";
	$req .= ", nomPrenomResponsable = '" . $nomPrenom . "'";
	$req .= ", telResponsable = '" . $tel . "'";
	$req .= ", mailResponsable = '" . $mail . "'";
	$req .= ", adresse = '" . $adresse . "'";
	$req .= " where id = " . $id ;
	$res = self::$monPdo->exec($req);
	return $res;

}

/**
 * Retourne les stages
 *
 * @return tous  les champs
*/        
public function getLesStages()
{
	$req = 'select id, DATE_FORMAT(dateDebut, "%d/%m/%Y") as dateDebut,DATE_FORMAT(dateFin, "%d/%m/%Y") as dateFin from stage';
	$res =  self::$monPdo->query($req);
	$lesLignes = $res->fetchAll();
	return $lesLignes;
}

public function modifierStages($id,$debut, $fin){
	$debut =  implode('-',array_reverse  (explode('/',$debut)));
	$fin = implode('-',array_reverse  (explode('/',$fin)));
	$req = "update stage set dateDebut = '" . $debut . "'";
	$req .= ", dateFin = '" . $fin . "'";
	$req .= " where id = '" . $id . "'";
	$res = self::$monPdo->exec($req);
	return $res;
}

/**
 * Ajoute un stage
 *
 * @return si la requête s'est bien effectuée
*/
public function ajouterStage($id, $debut, $fin){
	$debut =  implode('-',array_reverse  (explode('/',$debut)));
	$fin = implode('-',array_reverse  (explode('/',$fin)));
	$req = "insert into stage values('$id', '$debut', '$fin')";
	$res = self::$monPdo->exec($req);
	return $res;
}

/**
 * Retourne les formateurs
 *
 * @return si la requête s'est bien effectuée
*/
public function getLesFormateurs()
{
    $req = "select id, nomPrenomFormateur  from formateur ";
    $res =  self::$monPdo->query($req);
    $lesLignes = $res->fetchAll();
    return $lesLignes;
}
/**
 * Ajoute un formateur
 *
 * @return si la requête s'est bien effectuée
*/
public function ajouterFormateur($nomPrenom){
	$req = "insert into formateur(nomPrenomFormateur)  values('$nomPrenom')";
	$res = self::$monPdo->exec($req);
	return $res;

}
/**
 * Modifie un formateur
 * @param les champs du formateur
 * @return si la requête s'est bien passée
*/
public function modifierFormateur($id ,$nomPrenom ){
	$req = "update formateur set nomPrenomFormateur = '" . $nomPrenom ."'";
	$req .= " where id = " . $id ;
	$res = self::$monPdo->exec($req);
	return $res;

}
/**
 * Retourne les stagiaires et le booleen de la conventiond'une option 
 *
 * @return les id, nom et prenom des stagiaires et booleen de la convention
*/        
public function getLesStagiairesConvention($option)
{
	$promotion = substr($_SESSION['stage'],0,4);
	$req = "select stagiaire.id, nom, prenom, convention.id as idConvention, idStage from stagiaire LEFT OUTER JOIN convention on 
	stagiaire.id = convention.idStagiaire where optionS = '" . $option . "' and promotion = '". $promotion . "'";
	$res =  self::$monPdo->query($req);
	$lesLignes = $res->fetchAll();
	return $lesLignes;
}

/**
 * Ajoute une convention
 *
 * @return si la requête s'est bien effectuée
*/
public function ajoutConvention($nomPrenomTuteur, $telTuteur, $mailTuteur,  $idStagiaire, $idStage, $idEntreprise, $idFormateur)
{
    $req = "insert into convention ( nomPrenomTuteur, telTuteur, mailTuteur,  idStagiaire, idStage, idEntreprise, idFormateur)
     values( '$nomPrenomTuteur', '$telTuteur', '$mailTuteur', '$idStagiaire', '$idStage', '$idEntreprise', '$idFormateur')";
	
	 $res = self::$monPdo->exec($req);
     return $res;
}

/**
 * Retourne la convention et toutes les infos pour MAJ à partir de son id 
 *
 * @return les information convention
*/        
public function getConvention($id)
{
	$req = "select nomPrenomTuteur, telTuteur,mailTuteur, nomPrenomFormateur,idStagiaire,raisonSociale, idEntreprise ";
	$req .= "  from convention ";
    $req .= " inner join formateur on convention.idFormateur = formateur.id 
    inner join entreprise on convention.idEntreprise = entreprise.id
    where convention.id = '" . $id . "'";
    $res =  self::$monPdo->query($req);
    $laLigne = $res->fetch();
    return $laLigne;
}
	
	
/**
 * maj de la convention 
 *
 * @return 
*/ 

public function enregModifsConvention($idConvention, $idFormateur,$idEntreprise,$nomPrenomTuteur,$mailTuteur,$telTuteur){
	$req = "update convention set idFormateur = " . $idFormateur . ", idEntreprise = " . $idEntreprise ;
	$req .= ", nomPrenomTuteur = '" . $nomPrenomTuteur . "' , mailTuteur = '" . $mailTuteur . "'";
	$req .= ", telTuteur = '" . $telTuteur . "' where id =  $idConvention "  ;
	$res = self::$monPdo->exec($req);
	return $res;
}

/*----------------------------------------Gestion des etats-----------------------------------*/
public function getLesConventions($idStage, $option){
	$req = "select *  from convention inner join stagiaire on convention.idStagiaire = stagiaire.id ";
	$req .= " inner join entreprise on convention.idEntreprise = entreprise.id ";
	$req .= " where convention.idStage = '" . $idStage . "' and stagiaire.optionS= '" . $option ."'";
	$res =  self::$monPdo->query($req);
    $laLigne = $res->fetchAll();
    return $laLigne;
}

/**
 * Retourne les entreprises d'une option
 *
 * @return les id, raison sociale et adresse des entreprises 
*/        
public function getLesEntreprisesParOption($option)
{
	$req = "select distinct raisonSociale,adresse,nomPrenomResponsable,telResponsable,mailResponsable from entreprise inner join convention on entreprise.id= convention.idEntreprise ";
	$req .=" inner join stagiaire on convention.idStagiaire= stagiaire.id";
	$req .= " where stagiaire.optionS = '" . $option . "'";
	$res =  self::$monPdo->query($req);
	$lesLignes = $res->fetchAll();
	return $lesLignes;
}

} // fin classe 
	

	




?>
