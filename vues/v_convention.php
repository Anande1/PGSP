<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
    <title>Greta Météhor</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="styles/styles.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico" />
  </head>
  <body>
	
  <img src="<?= $site . "logoGreta.jpg"?>" alt="Logo" title="Logo"/>
	<table border="1">
		<tr>
			<td width="700">
				<div style="text-align: center"><h2>CONVENTION DE STAGE EN ENTREPRISE</h2></div>
			</td>
		</tr>
	</table>
 <h3><u>ARTICLE 1:</u></h3>
 <h4>La présente convention règle les rapports,</h4>
  <table border="1">
 	<tr>
		 <td width="700"><u>De l’entreprise :</u> <strong><?= $entreprise['raisonSociale'] ?></strong> 
 			<br>Adresse : <?= $entreprise['adresse'] ?>
			<br>Représentée par : <?= $entreprise['nomPrenomResponsable'] ?>
			<br>Tél : <?= $entreprise['telResponsable'] ?> Mail : <?= $entreprise['mailResponsable'] ?>
		</td>
	</tr>
</table>
<br>
<table border="1">
<tr><td width="700"><u>Avec le centre de formation </u>: <strong>GRETA METEHOR Paris</strong>
	<br>Adresse : 70, Boulevard Bessières - 75847 PARIS CEDEX 17
    <br>Représenté par :	Madame Claudine <strong>LEDOUX,</strong> 
	<br>Fonction : Présidente-Ordonnatrice du GRETA METEHOR Paris et Proviseure de l’ENC.
	<br><strong>Tél : 01 44 85 85 01	Mail : info@gretametehor.com</strong>
	<br>Déclaré comme organisme de formation à la préfecture de région Ile de France 
	<br>Sous le n° de déclaration : 1175P007675 / n° SIRET : 197 507 072 000 27 / CODE APE : 8559 A
	</td>
</tr>
</table>
<br>
<table border="1">
<tr><td width="600"><u>Pour le stage en entreprise de :</u><strong> <?= $stagiaire['nom'] . " " . $stagiaire['prenom']?> </strong>	
	<br>Adresse: 
	<br>Mail : <?= $stagiaire['mail'] ?>
	<br>Tél : <?= $stagiaire['telephone'] ?>	<div style="text-align: center;"></div>
	<div style="text-align: center;">Dans le cadre de sa formation au :<strong> BTS SIO option SLAM</strong></div>
	<br><div style="text-align: center;">Date de début : 09/<?= $stagiaire['promotion']?>	Date de fin : 06/<?= $stagiaire['promotion'] + 1 ?> 	</div>
	</td></tr>	
</table>
 <h2><u>Article 2 :</u></h2>
 Les stages en entreprise ont pour objet essentiel d’assurer l’application pratique de l’enseignement donné au GRETA METEHOR Paris.
	
<h2><u>Article 3 :</u></h2> 
<strong>Le stage aura lieu du:<br></strong> Lundi <strong><?= implode('/',array_reverse  (explode('-',$stage['dateDebut'])))?></strong> 
au Vendredi <strong><?= implode('/',array_reverse  (explode('-',$stage['dateFin']))) ?></strong>

<strong><br>Dans l'entreprise, le stagiaire est placé sous la responsabilité directe d’un tuteur : <?= $convention['nomPrenomTuteur'] ?></strong>
	<br>Tél :<?= $convention['telTuteur'] ?>	Mail :	<?= $convention['mailTuteur'] ?>
<br>
<strong><br> Interlocuteurs au sein du GRETA METEHOR PARIS :</strong><br>
<strong>- <?= $formateur ?></strong>	Formateur	
<br><strong>- M. Gérard CAER</strong>	Coordonnateur Administratif,	Tél : 07 71 44 01 76
<br>
<br><div style="text-align: center;">GRETA METEHOR Paris
<br>SIRET : 19750707200027 – Numéro d’activité : 1175P007675
<br>Siège : 70, Bd Bessières 75017 Paris – Tél 01 44 85 85 40
 <br>  Site : http://www.gretametehor.com</div>
<table><tr><td width="300" >
	<img src="<?= $site . "durable.jpg" ?>" alt="durable"> </td><td width="250">page 1/3 </td><td width="400">
		<div style="image-rendering: auto;"><img src="<?= $site . "diversite.jpg" ?>" alt = "diverse"></div></td>
	</tr>
</table>
<br><br><br>
<img src="<?= $site . "logoGreta.jpg"?>" alt="Logo" title="Logo"/>
<table border="1">
		<tr>
			<td width="700">
				<div style="text-align: center"><h2>CONVENTION DE STAGE EN ENTREPRISE</h2></div>
			</td>
		</tr>
	</table>
<h2><u>Article 4 :</u></h2> 
	<br>Les modalités du stage en entreprise seront établies par le responsable en entreprise en fonction de la spécialisation du stagiaire. <br>L’entreprise s’engage, néanmoins, à confier au stagiaire une activité correspondant à la formation mentionnée ci-dessus. 
	<br>
	

<h2><u>Article 5 :</u></h2>
Le stagiaire, pendant la durée du séjour dans l’entreprise, demeure stagiaire du GRETA METEHOR Paris. Il sera suivi par le responsable pédagogique. 
L’entreprise s’engage à faciliter, au responsable pédagogique du stage, l’accès et la relation avec le lieu de travail habituel du stagiaire. Le tuteur en entreprise sera chargé du suivi du stagiaire en entreprise.
<h2><u>Article 6 :</u></h2>
Durant le stage, le stagiaire sera soumis au règlement intérieur en vigueur dans l’entreprise qui l’accueille, notamment en ce qui concerne les horaires. 
Il pourrait être mis fin au stage, avant le terme prévu par la présente convention, 
	<br>- soit par le tuteur, en cas de manquement grave aux règles de l’entreprise,
	 <br>- soit par le stagiaire et (ou) le GRETA METEHOR PARIS, si les engagements pris lors de la signature n’étaient pas respectés. 
	 Toutefois, cette rupture ne pourrait avoir lieu qu’après un entretien préalable de conciliation entre les différentes parties signataires.
Par ailleurs, l’entreprise s’engage à informer le GRETA METEHOR PARIS dans les meilleurs délais, en cas d’absences, d’interruption du stage ou de toute difficulté faisant obstacle à la réussite de cette coopération.
<br>



<br>
  <h2><u>Article 7 :</u></h2>
  <br>En cas d’accident survenant au stagiaire, soit au cours de ses activités de stage, soit au cours du trajet, la responsabilité civile du stagiaire, garantie souscrite par le GRETA METEHOR Paris, est couverte par : 
  <br>La MAIF 19, rue Ferdinand Buisson 75781 PARIS CEDEX 16
  <br>N° de sociétaire : 1105871 – tél : 01.46.10.51.00
    <br>
  <br>Dans ce cas, le GRETA METEHOR Paris s’engage à remplir les imprimés prévus à cet effet.


<h2><u>Article 8 :</u></h2>
L’entreprise peut décider de verser une indemnité de stage ou de remboursement de frais ou toute autre gratification à sa convenance mais le stagiaire ne pourra prétendre à aucune rémunération de droit relevant des dispositions de la formation professionnelle continue telle que définie dans la Loi n°2006-396 du 31 mars 2006 « pour l’égalité des chances », modifiée par la Loi n 2009-1437 du 24 novembre 2009.

<br><br><br><br><br><br><br><br><br>

<table><tr><td width="300" >
	<img src="<?= $site . "durable.jpg" ?>" alt="durable"> </td><td width="250">page 2/3 </td><td width="400">
		<div style="image-rendering: auto;"><img src="<?= $site . "diversite.jpg" ?>" alt = "diverse"></div></td>
	</tr>
</table>
<br><br><br><br>
<img src="<?= $site . "logoGreta.jpg"?>" alt="Logo" title="Logo"/>
	
	<table border="1">
		<tr>
			<td width="700">
				<div style="text-align: center"><h2>CONVENTION DE STAGE EN ENTREPRISE</h2></div>
			</td>
		</tr>
	</table>
<h2><u>Article 9 :</u></h2>
Les frais de formation à l’initiative de l’entreprise sont à la charge de celle-ci.

<h2><u>Article 10 :</u></h2>
L’entreprise devra fournir au GRETA METEHOR Paris une attestation de présence ainsi que, si nécessaire, des documents administratifs afférents au passage des différentes épreuves d'examen, complétés, signés et tamponnés (certificat de stage sur l’ensemble de la période et attestation de conformité des travaux réalisés).
<h2><u>Article 11 :</u></h2>
L’entreprise s’engage à fournir au stagiaire le matériel et les informations nécessaires à la bonne réalisation de son stage et à lui permettre de conserver toute la documentation utile à la préparation de ses dossiers et examen(s).

En contrepartie, le stagiaire et l’équipe pédagogique s’engagent à garantir la confidentialité des informations ou documents communiqués.

<br><br><br><br>Fait à .Paris, le <?= date('d/m/Y') ?><br>
<br>
<table>
	<tr>
		<td width="250">Le représentant de l'entreprise<br>
			cachet et signature 
		</td>
		<td width="250" >Le stagiaire <br>
			Signature
		</td>
		<td width="250"> Le responsable pédagogique<br>
				Du GRETA METEHOR Paris<br>
				Cachet et signature
	</td>
	</tr>
	
</table>

	
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br>
<table><tr><td width="300" >
	<img src="<?= $site . "durable.jpg" ?>" alt="durable"> </td><td width="250">page 3/3 </td><td width="400">
		<div style="image-rendering: auto;"><img src="<?= $site . "diversite.jpg" ?>" alt = "diverse"></div></td>
	</tr>
</table>
</body>
</html>