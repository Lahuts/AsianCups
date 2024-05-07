<?php

class Utilisateur
{
    private $nom;
    private $prenom;
    private $email;
    private $id;
    private $addrs;
    private $tel;

    public function __construct($id, $nom, $prenom, $email, $addrs, $tel)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->id = $id;
        $this->addrs = $addrs;
        $this->tel = $tel;
    }

    public function getTel()
    {
        return $this->tel;
    }
    public function getAddrs()
    {
        return $this->addrs;
    }


    public function setAddrs($addrs)
    {
        $this->addrs = $addrs;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}