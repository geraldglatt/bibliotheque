<?php
ob_start();
require_once('models/livreManager.php');
$livreManager = new LivreManager();
$livre = $livreManager->getLivreById($id);
?>
<div class="card-group">
    <?php foreach($livre as $LivreSelectionne){ ?>
    <div class="card">
        <img src="<?= $LivreSelectionne['images'] ?>"   class="card-img-top" alt="Harry potter1">
        <div class="card-body">
            <h5 class="card-title">Le titre du livre est : <?= $LivreSelectionne['titre'] ?></h5>
            <p class="card-text">Ce livre à été écrit par <?= $LivreSelectionne['auteur'] ?> </p>
            <p class="card-text"><small class="text-muted">La date de sortie du livre est en <?= $LivreSelectionne['date_sortie'] ?> </small></p>
        </div>
    </div>
    <?php } ?>
</div>
<div class="row">
    <div class="col-6">
        <a class="btn btn-success" href="/?page=afficherModif&id=<?php echo $id; ?>" role="button">Modification du livre selectionné</a>
    </div>
    <div class="col-6">
        <a class="btn btn-danger" href="/?page=delete&id=<?php echo $id; ?>" role="button">Suppression du livre selectionné</a>
    </div>
</div>
<?php 
$titre = "Page du livre selectionné";
$content = ob_get_clean();
require('./views/commons/templates.php');
?>
