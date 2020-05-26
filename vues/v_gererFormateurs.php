<div id="contenu">
<h1 >Les entreprises </h1>
<a href="index.php?uc=gererFormateurs&action=ajouter" style="color:blue">Ajouter un formateur</a><br><br>
<table class =  "listeLegere">
    <tr>
        <th>Nom prénom</th>
    </tr>
<?php 
foreach ($lesFormateurs as $ligne)
{
    $id = $ligne['id'];
    $nomPrenom = $ligne['nomPrenomFormateur'];
    ?>
    <tr>
        <td><?=  $nomPrenom ?></td>
        <td><a href="index.php?uc=gererFormateurs&action=modifier&id=<?= $id ?>&nomPrenom=<?= $nomPrenom ?>" style="color:blue">Modification</td>
    </tr>
<?php 
}

?>
</table>
</div>