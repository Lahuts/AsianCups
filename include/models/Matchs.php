<?php

class Matchs {
    // Properties
    private $id;
    private $team1;
    private $team2;
    private $date;
    private $heure;
    private $stade;
    private $billets;

    private $etape;



    
    // Constructor
    public function __construct($id,$date, $heure,$team1, $team2,$etape,$stade) {
        $this->id = $id;
        $this->team1 = $team1;
        $this->team2 = $team2;
        $this->date = $date;
        $this->heure = $heure;
        $this->stade = $stade;
        $this->etape = $etape;
    }
    
    // Getters and Setters

    public function getId() {
        return $this->id;
    }
    public function getEtape() {
        return $this->etape;
    }

    public function getBillets() {
        return $this->billets;
    }

    public function setBillets($billets) {
        $this->billets = $billets;
    }

    public function getStade() {
        return $this->stade;
    }

    public function setStade($stade) {
        $this->stade = $stade;
    }

    public function getHeure(){
        $h = date_create($this->heure);
        return date_format($h, 'H:i');
    }

    public function getDate(){
        $t = date_create($this->date);
        return date_format($t, 'd/m/Y');
    }


    public function setDate($date) {
        $this->date = $date;
    }

  
    
    public function getTeam1() {
        return $this->team1;
    }
    
    public function setTeam1($team1) {
        $this->team1 = $team1;
    }
    
    public function getTeam2() {
        return $this->team2;
    }
    
}