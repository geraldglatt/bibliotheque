<?php


class Livre 
{

    protected $id;
    protected $titre;
    protected $auteur;
    protected $nb_pages;
    protected $date_sortie;
    protected $images;
    

    public function __construct(int $id,string $titre,string $auteur,int $nb_pages,int $date_sortie,string $images)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nb_pages = $nb_pages;
        $this->date_sortie = $date_sortie;
        $this->images = $images;
    }
    //getter
    public function getId(){return $this->id;}

    public function getTitre(){return $this->titre;}

    public function getAuteur(){return $this->auteur;}

    public function getNb_pages(){return $this->nb_pages;}

    public function getDate_Sortie(){return $this->date_sortie;}

    public function getImage(){return $this->images;}

    //setter
    public function setId($id){return $this->id = $id;}

    public function setTitre($titre){return $this->titre = $titre;}

    public function setAuteur($auteur){return $this->auteur = $auteur;}

    public function setNb_pages($nb_pages){return $this->nb_pages = $nb_pages;}

    public function setDate_Sortie($date_sortie){ return $this->date_sortie = $date_sortie;}

    public function setImage($images){return $this->images = $images;}

}