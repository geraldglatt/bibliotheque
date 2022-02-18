<?php
require_once 'Models.class.php';
require_once 'livre.class.php';

class LivreManager extends Models
{

    private $livres;

    public function ajoutLivre($livre){
        $this->livres[] = $livre;//tableau de livres
    }

    public function getLivres()
    {
        return $this->livres;
    }
    

    public function getLivresBD()
    {
        $req = $this->getBDD()->prepare("SELECT * FROM livre");
        $req->execute();
        $livres = $req->fetchAll(PDO::FETCH_ASSOC);
        return $livres;
    }

    public function getLivreById($id){
        $req = $this->getBDD()->prepare("SELECT * FROM livre where id = $id");
        $req->execute();
        $livre = $req->fetchAll(PDO::FETCH_ASSOC);
        return $livre;
        
        {
            throw new Exception("Le livre n'existe pas");
        }

    }

        
    
    public function createLivreBD($titre,$auteur,$nb_pages,$date_sortie,$images)
    {
        $req = "
        INSERT INTO livre (titre,auteur,nb_pages,date_sortie,images)
        values (:titre,:auteur,:nb_pages,:date_sortie,:images)";
        $stmt = $this->getBDD()->prepare($req);
        $stmt->bindValue(":titre",$titre,PDO::PARAM_STR);
        $stmt->bindValue(":auteur",$auteur,PDO::PARAM_STR);
        $stmt->bindValue(":nb_pages",$nb_pages,PDO::PARAM_INT);
        $stmt->bindValue(":date_sortie",$date_sortie,PDO::PARAM_INT);
        $stmt->bindValue(":images",$images,PDO::PARAM_STR);
        $resultat = $stmt->execute();
        
    }
    public function updateLivreBD($id,$titre,$auteur,$nb_pages,$date_sortie,$images){
        $req = "
        UPDATE livre SET titre = :titre , auteur = :auteur , nb_pages = :nb_pages,
         date_sortie = :date_sortie , images = :images  where id = :id";
        $stmt = $this->getBDD()->prepare($req);
        $stmt->bindValue(":id",$id,PDO::PARAM_STR);
        $stmt->bindValue(":titre",$titre,PDO::PARAM_STR);
        $stmt->bindValue(":auteur",$auteur,PDO::PARAM_STR);
        $stmt->bindValue(":nb_pages",$nb_pages,PDO::PARAM_INT);
        $stmt->bindValue(":date_sortie",$date_sortie,PDO::PARAM_INT);
        $stmt->bindValue(":images",$images,PDO::PARAM_STR);
        $modif = $stmt->execute();
    }
    public function deleteLivreBD($id)
    {
        $req ="Delete FROM livre WHERE livre.id = $id";
        $stmt = $this->getBDD()->prepare($req);
        $delete = $stmt->execute();
    }

}

   
        



