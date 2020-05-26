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
  <h4> Récapitulatif conçernant les entreprises en <?= $option ?></h4>
  <table border="1">
  <tr style="text-align:center">
        <th> Raison sociale </th><th> adresse </th> <th> Nom et Prenom responsable </th><th> Téléphone Responsable </th><th> Mail Responsable </th>
    </tr>
  

  <?php
  
    foreach($lesEntreprises as $uneEntreprise){
        $RaisonSociale = $uneEntreprise['raisonSociale'];
        $adresse = $uneEntreprise['adresse'];
        $nomPrenomResponsable = $uneEntreprise['nomPrenomResponsable'];
        $telResponsable = $uneEntreprise['telResponsable'];
        $mailResponsable = $uneEntreprise['mailResponsable'];


?>
    
    <tr >
        <td ><?=  $RaisonSociale ?>  </td>
        <td ><?=  $adresse ?>  </td>
        <td ><?=  $nomPrenomResponsable ?>  </td>
        <td ><?=  $telResponsable ?>  </td>
        <td ><?=  $mailResponsable ?>  </td>

    </tr>

<?php }
 ?>
</table>

</body>
</html>