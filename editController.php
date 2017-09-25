<?php

include "model/model.php";

$utilisateur = getUser($_GET['id']);

var_dump($utilisateur);