<h3>Panneau Administrateur Iligi</h3>
<br>
<h4>Générateur de bail</h4>
  <!-- 
--------------------------------------

#TODO : proposition d'autocomplétion dans la barre de recherche (peut-être un jour (sûrement pas))
Utilisation de jquery
--------------------------------------
  -->
  <form action="index.php" method="post">
  <div class = "ui-widget">
         
         <label for ="automplete_tenant">Trouver un locataire: </label>
         <input type="text" id = "automplete_tenant" name="box_search_tenant">
         
         
         <label for="automplete_landlord">Trouver un propriétaire: </label>
         <input type="text"id="autocomplete_landlord" name="box_search_landlord" >
         
         <input type="submit" name="search">
<br><br>
 </form>


 <div>
<button type="submit" name="submit_to_modelo" style="margin-left:35%;"><a  href="https://doc.modelo.fr/">Envoyer sur Modelo (clic molette)</a></button>
 
 </div>
<form action="index.php" method="post" enctype="multipart/form-data">
<br>
       <label for="files_common">Ajouter le bail rempli</label>
        <input type="file"  name="file_common"> <!-- input case du fichier à charger -->
        <input type="submit" name="submit_file_common"> <!-- Bouton ok -->
</form>

<form action="index.php" method="post">
<br><br>

<label for="deleting_lease" style="color:red;">SUPPRIMER UN BAIL (restera sur Modelo quand même)</label>
<input type="submit" name="delete_lease">
  <select name="lease_select" id="lease_select">
  <option value="1"></option>
  </select>

</form>

 <!-- Autocompletion task, to do later...     https://doc.modelo.fr/   target="_blank" rel="noopener noreferrer" 
<form action="index.php" method="post">
 
    <label for="tenant_search">Rechercher un locataire</label>
    <input  type="text" name="tenant_search" id="autocomplete_search">
    <input type="submit" name="submit_tenant_search">
  <br>
  

    <label for="landlordSearch">Rechercher un Propriétaire</label>
    <input type="text" id="landlord_search" name="landlord_search" placeholder="Votre propriétaire">

    <input type="submit" name="submit_to_modelo" value="Envoyer sur Modelo">    
</form>
-->