<?php
require_once("index.php");
require_once('models/livreManager.php');
$livreManager = new LivreManager();

class LivresController
{
    private $livreManager;

    public function __construct(){
        $this->livreManager = new LivreManager;
        $this->livreManager->getLivresBD();
    }
    public function afficherLivres()
    {
        $title = "Page d'accueil";
        $description = "C'est la page d'accueil";
        $livres = $this->livreManager->getLivres();
        require('views/front/accueil.view.php');
    }
    public function afficherLivre($id){
    
        $title = "Page d'un livre";
        $description = "C'est la page d'un livre";
        $livre = $this->livreManager->getLivreById($id);
        require('views/front/livre.view.php');
    }
    public function ajoutLivre()
    {
        $this->livreManager->createLivreBD($_POST['titre'],$_POST['auteur'],$_POST['nb_pages'],$_POST['date_sortie'],$_POST['images']);
        
        

    }
    public function afficherAjout()
    {
        $title = "Page d'ajout d'un livre";
        require"views/back/ajout.view.php";
        
    }
    public function modificationLivre($id)
    {
        $livre = $this->livreManager->getLivreById($id);
    }
    public function updateLivre()
    {
        $this->livreManager->updateLivreBD($_GET['id'],$_POST['titre'],$_POST['auteur'],$_POST['nb_pages'],$_POST['date_sortie'],$_POST['images']);
        require('views/front/accueil.view.php');
    }
    public function AfficherModifForm($id)
    {
        
        $title = "Modification du livre ";
        $livre = $this->livreManager->getLivreById($id);
        require"views/back/modif.view.php"; 
    }
    public function deleteLivre()
    {
        $delete = $this->livreManager->deleteLivreBD($_GET['id']);
        header("Location: views/front/accueil.view.php");
    }
}
