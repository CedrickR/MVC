<?php

include "class/Utilisateur.php";
include "dataUser.php";


include "header.php";
// Récupérer les utilisateurs
//$listUser = getUser();

$listUser = getDB();


$utilisateurs = array(); //Tableau d'objets pour les utilisateurs

foreach ($listUser as $user) {
   
    echo $user->getId();
    /*
    $utilisateur = new Utilisateur;
        $utilisateur->setId($user['id']);
        $utilisateur->setNom($user['nom']);
        $utilisateur->setPrenom($user['prenom']);
        $utilisateur->setService($user['service']);
    $utilisateurs[] = $utilisateur;*/
}


include "contenu.php";
include "footer.php";

