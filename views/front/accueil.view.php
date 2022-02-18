<?php
ob_start();
require_once('models/livreManager.php');
$livreManager = new LivreManager();
$livres = $livreManager->getLivresBD();

?>
<div class="row">
    <div class="col-12">
        <div class="card">
                <?php foreach($livres as $livre) : ?>
                    <div class="card">
                        <img src="../../public/sources/images/<?= $livre['images'] ?>"  class="card-img-top w-25 align-items_center " alt="Harry potter1">
                        <div class="card-body">
                            <h5 class="">Le titre du livre est : <?= $livre['titre'] ?></h5>
                            <p class="">Ce livre à été écrit par <?= $livre['auteur'] ?>  et il contient <?= $livre['nb_pages'] ?> pages.  </p>
                            <p class="card-text"><small class="text-muted">La date de sortie du livre est en <?= $livre['date_sortie'] ?>  </small></p>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a class="btn btn-dark text-white" href="/?page=livre&id=<?=$livre['id'] ?>" role="button">Selectionner ce livre</a>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-primary" href="/?page=add" role="button">Ajout d'un livre en bibliotheque</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
        </div>
    </div>
</div>





<?php
$titre = "Accueil";
$content = ob_get_clean();
require('views/commons/templates.php');
?>  
 

    
 





