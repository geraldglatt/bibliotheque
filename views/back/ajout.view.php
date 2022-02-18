<?php
require_once('models/livreManager.php');
ob_start();
?>

<form method="POST" action="/?page=ajout" >
    <div class="form-group mb-3">
        <label for="titre" class="form-label">Rentrez votre titre</label>
        <input type="text" class="form-control" id="titre" name="titre">
    </div>
    <div class="form-group mb-3">
        <label for="auteur" class="form-label">Quel est le nom de l'auteur :</label>
        <input type="text" class="form-control" id="auteur" name="auteur">
    </div>
    <div class="form-groupmb-3">
        <label for="nb_pages" class="form-label">Rentrez le nombre de pages du livre :</label>
        <input type="number" class="form-control" id="nb_pages" name="nb_pages">
    </div>
    <div class="form-group mb-3">
        <label for="date_sortie" class="form-label">Rentrez la date de sortie du livre :</label>
        <input type="date" class="form-control" id="date_sortie" name="date_sortie">
    </div>
    <div class="form-group mb-3">
        <label for="images" class="form-label">Quelles images voulez-vous rentrez correspondant à votre livre :</label>
        <input type="text" class="form-control" id="images" name="images">
    </div>
    
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>



<?php
$titre = "Ajout d'un livre";
$content = ob_get_clean();
require('views/commons/templates.php');
?>  
 

    
 





