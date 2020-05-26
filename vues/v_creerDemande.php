<div id="contenu">
    <h2><legend> Stagiaire :  <?= $nom . " " . $prenom ?> </legend></h2>
<h1 >Les entreprises enregistrées </h1>
<a href="index.php?uc=gererEntreprises&action=ajouter" style="color:blue">Ajouter une entreprise</a><br><br>
<table class =  "listeLegere">
    <tr>
        <th>Raison sociale</th>
        <th>Ville</th>
    </tr>
<?php 
foreach ($lesEntreprises as $ligne)
{
    $id = $ligne['id'];
    $raison = $ligne['raisonSociale'];
    $adresse = $ligne['adresse'];
    ?>
    <tr>
        <td><?= $raison ?></td>
        <td><?= $adresse ?></td>
        <td><a href="index.php?uc=gererDemandes&action=imprimer&idEntreprise=<?= $id ?>&idStagiaire=<?= $idStagiaire ?>" style="color:blue">Imprimer</td>
    </tr>
<?php 
}
?>
</table>
</div>