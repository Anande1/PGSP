<div id="contenu">
<h1 >Les stages</h1>

<a href="index.php?uc=gererStages&action=ajouter" style="color:blue">Ajouter un stage</a><br><br>
<table class =  "listeLegere">
    <tr>
        <th>Id</th>
        <th>Date début</th>
        <th>date fin</th>
    </tr>
<?php 
foreach ($lesStages as $ligne)
{
    $id = $ligne['id'];
    $debut = $ligne['dateDebut'];
    $fin = $ligne['dateFin'];
    ?>
   <tr>
   <form action = "index.php?uc=gererStages&action=enregistrerModifs&id=<?= $id ?>"    method ="post">
        <td><?= $id ?></td>
        <td> <input type = "text" value ="<?= $debut ?>" name ="debut"> </td>
        <td><input type = "text" value ="<?= $fin ?>" name ="fin"></td>
        <td> <input type = "submit" value = "Modifier"></td>
    </form>
 </tr>
<?php 

}
?>
</table>
</div>