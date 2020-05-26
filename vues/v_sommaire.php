    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
            <li id="pres" >
               Bonjour 
               <?= $_SESSION['login']?>
            </li>
            <li id="pres" >
              Vous gérez le stage <?= $_SESSION['stage'] ?> pour les <?= $_SESSION['option']?>
            </li>
            <br>
            <li class="smenu">
              <a href="index.php?uc=connexion&action=changerStageOuOption" title="voir les stagiaires ">Changer de stage ou d'option</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=gererStagiaires&action=voir" title="voir les stagiaires ">Gérer les stagiaires</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=gererStages&action=voir" title="Voir les stages">Gérer les stages</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=gererEntreprises&action=voir" title="voir les entreprises">Gérer les entreprises</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=gererFormateurs&action=voir" title="voir les formateurs">Gérer les formateurs</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=gererConventions&action=voir" title="voir les conventions">Gérer les Conventions</a>
           </li>
          
 	         <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
      <ul id="menuList">
         <li id="pres" >
               Imprimer des états 
               
         </li>
         <li class="smenu">
              <a href="index.php?uc=gererEtats&action=voirEtatStage" title="Imprimer état des stages">Etat des stages</a>
         </li>
         <li class="smenu">
              <a href="index.php?uc=gererEtats&action=voirEtatEntreprise" title="Imprimer état des entreprises">Etat des entreprises</a>
         </li>
      </ul>
    </div>
    