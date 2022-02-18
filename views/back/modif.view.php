<?php
ob_start();
require_once('models/livreManager.php');
$livreManager = new LivreManager();
$livre = $livreManager->getLivreById($id);
?>

<form method="POST" action="/?page=update&id=<?= $id ?>">
<?php foreach($livre as $livreSelecModif) 
{ ?>
    <div class="form-group mb-3">
        <label for="titre" class="form-label">Rentrez votre nouveau titre</label>
        <input type="text" class="form-control" id="titre" name="titre" value="<?= $livreSelecModif['titre']  ?>">
    </div>
    <div class="form-group mb-3">
        <label for="auteur" class="form-label">Quel est le nom de l'auteur :</label>
        <input type="text" class="form-control" id="auteur" name="auteur" value="<?= $livreSelecModif['auteur']?>">
    </div>
    <div class="form-group mb-3">
        <label for="nb_pages" class="form-label">Rentrez le nombre de pages du livre :</label>
        <input type="number" class="form-control" id="nb_pages" name="nb_pages" value="<?= $livreSelecModif['nb_pages']?>">
    </div>
    <div class="form-group mb-3">
        <label for="date_sortie" class="form-label">Rentrez la date de sortie du livre :</label>
        <input type="date" class="form-control" id="date_sortie" name="date_sortie" value="<?= $livreSelecModif['date_sortie']?>" >
    </div>
    <div class="form-group mb-3">
        <label for="images" class="form-label">Quelles images voulez-vous rentrez correspondant à votre livre :</label>
        <input type="text" class="form-control" id="images" name="images" value="<?= $livreSelecModif['images']?>">
    </div>
    
    <button type="submit" class="btn btn-primary">Valider</button>
</form>
<?php } ?>



<?php
$titre = "Modification du livre :";
$content = ob_get_clean();
require('views/commons/templates.php');
?>  
 

    
 





