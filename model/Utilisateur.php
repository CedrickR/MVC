<?php

class Utilisateur{

    private $id;
    private $nom;
    private $prenom;
    private $service;


    function __construct($id, $nom, $prenom, $service){
        $this->id =$id;
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setService($service);
    }

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    function getNom(){
        return $this->nom;
    }

    function setNom($nom){
        $this->nom = $nom;
    }

    function getprenom(){
        return $this->prenom;
    }

    function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    function getService(){
        return  $this->service;
    }

    function setService($service){
        $this->service = $service;
    }
}