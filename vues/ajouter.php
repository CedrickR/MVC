<?php

include "class/Utilisateur.php";

$nxUtilsateur = New Utilisateur;

$nxUtilsateur->setNom(_POST['nom']);
$nxUtilsateur->setPrenom(_POST['prenom']);
$nxUtilsateur->setService(_POST['service']);

$utilisateurs[] = $nxUtilsateur;

header('location: http://localhost');
