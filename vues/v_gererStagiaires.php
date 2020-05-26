<div id="contenu">
<h1 >Les stagiaires</h1>

<a href="index.php?uc=gererStagiaires&action=ajouter" style="color:blue">Ajouter un stagiaire</a><br><br>
<table class = "listeLegere">
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
    </tr>
<?php 
foreach ($lesStagiaires as $ligne)
{
    $id = $ligne['id'];
    $nom = $ligne['nom'];
    $prenom = $ligne['prenom'];

    ?>
   
    <tr>
        <td><?= $nom ?></td>
        <td><?= $prenom ?></td>
        <td><a href="index.php?uc=gererStagiaires&action=modifier&id=<?= $id ?>" style="color:blue">Modification</td>
     
     
  </tr>
<?php 

}

?>
</table>
</div>