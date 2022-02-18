<?php
require_once "controllers/LivresController.php";

//constante URL, cette phrase viendra pointer sur la racine du site
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").
"://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

$livresController = new LivresController();
try{
    if(empty($_GET['page']))
    {
        $page = "accueil";
    } else 
    {
    //on explose l'url
    $url = explode("/", filter_var($_GET['page'],FILTER_SANITIZE_URL));
    $page = $url[0];
    }
        //ici on utlise un switch case pour choisir le bon canal
        switch($page)
        {
            case "accueil" : $livresController->afficherLivres();
            break;
            case "ajout" : $livresController->ajoutLivre();
            break;
            case "add": $livresController->afficherAjout();
            break;
            case "livre": $livresController->afficherLivre($_GET['id']);
            break;
            case "afficherModif": $livresController->AfficherModifForm($_GET['id']);
            break;
            case "update": $livresController->updateLivre();
            break;
            case "delete": $livresController->deleteLivre();
            break;
            default : throw new Exception("Ceci ne correspond à aucunes pages");
            break;
        
        } 
    }catch (Exception $e){
}


