<?php


include "model/model.php";
include "model/Utilisateur.php";

$utilisateurs = array();

$results = getAllUser();


foreach ($results as $line) {
    $currentId = $line['ID'];
    $currentNom = $line['nom'];
    $currentPrenom = $line['prenom'];
    $currentService = $line['service'];
    $utilisateur = new Utilisateur($currentId, $currentNom, $currentPrenom, $currentService );
    $utilisateurs[]= $utilisateur;
}

include "listController.php";





