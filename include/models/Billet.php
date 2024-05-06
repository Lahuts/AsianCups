<?php

require_once 'include/models/flag.php';

class Billet{
    private $id;

    private $heure;
    private $date;
    private $stade;
    private $etape;
    private $categorie;
    private $equipe1;
    private $equipe2;
    private $prix;

    public function __construct($id ,$heure, $date, $stade, $etape, $categorie,$equipe1, $equipe2,$prix){
        $this->id = $id;
        $this->heure = $heure;
        $this->date = $date;
        $this->stade = $stade;
        $this->etape = $etape;
        $this->categorie = $categorie;
        $this->equipe1 = $equipe1;
        $this->equipe2 = $equipe2;
        $this->prix = $prix;
    }

    public function getId(){
        return $this->id;
    }

    
    public function getPrix(){
        return $this->prix;
    }

    public function getHeure(){
        $h = date_create($this->heure);
        return date_format($h, 'H:i');
    }

    public function getDate(){
        $t = date_create($this->date);
        return date_format($t, 'd/m/Y');
    }

    public function getStade(){
        return $this->stade;
    }

    public function getEtape(){
        return $this->etape;
    }

    public function getCategorie(){
        return $this->categorie;
    }

    public function getEquipe1(){
        return $this->equipe1;
    }
    public function getEquipe2(){
        return $this->equipe2;
    }

    public function getCard(){
        return 
        '
        <li>
        <div>
          <h4 class="phase">'.$this->getEtape().'</h4>
          <span class="flag-icon '.getFlag($this->getEquipe1()).'"alt="'.$this->getEquipe1().'" title="'.$this->getEquipe1().'"></span>
          <p>VS</p>
          <span class="flag-icon '.getFlag($this->getEquipe2()).'"alt="'.$this->getEquipe2().'" title="'.$this->getEquipe2().'"></span>
          <p>'.$this->getStade().'</p>
          <p>'.$this->getHeure().' - '.$this->getDate().'</p>
          <p class="cate">"'.$this->getCategorie().'"</p>
          <p class="price">$'.$this->getPrix().'</p>
          <a href="" class="btn"><span class="arrow"></span></a>
        </div>
      </li>
        ';
    }
}