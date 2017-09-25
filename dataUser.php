<?php


function getUser(){

    return array(
        array('1','Dupont', 'Marc', 'Prestations'),
        array('2','Martin', 'Maurice', 'Contentieux')
    );

}


function getDB(){

    $utilisateurs = array();
    try{
        $strConnection = 'mysql:host=localhost;dbname=caf261';
        $pdo = new PDO($strConnection,'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        $msg = 'ERREUR PDO dans' . $e->getFile() . ' L. ' . $e->getLine();
        die($msg);
    }
    
    $query = 'SELECT * FROM utilisateur';
    $stmt = $pdo->query($query);
    $results = $stmt->fetchAll();

    //var_dump($results);
    foreach ($results as $line) {
        $currentId = $line['ID'];
        $currentNom = $line['nom'];
        $currentPrenom = $line['prenom'];
        $currentService = $line['service'];
        $utilisateur = new Utilisateur($currentId, $currentNom, $currentPrenom, $currentService );
        var_dump($utilisateur);
        $utilisateurs[]= $utilisateur;
    }

    return $utilisateurs;
}
