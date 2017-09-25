<?php
    
    require "model/Utilisateur.php";
    function connectionDB(){
    
        try{
            $strConnection = 'mysql:host=localhost;dbname=caf261';
            $pdo = new PDO($strConnection,'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            $msg = 'ERREUR PDO dans' . $e->getFile() . ' L. ' . $e->getLine();
            die($msg);
        }
        return $pdo;
    }

    //fermer la connexion 

    function getAllUser() {

        $db = connectionDB();
        $query = 'SELECT * FROM utilisateur';
        $stmt = $db->query($query);
        $results = $stmt->fetchAll();

        return setArrayUtilisateur($results);
        

    }

    function getUser($id) {
        
                $db = connectionDB();
                $query = "SELECT * FROM utilisateur WHERE ID='$id'";
                $stmt = $db->query($query);
                $results = $stmt->fetchAll();
        
                return setArrayUtilisateur($results);
                
        
            }


    function setArrayUtilisateur($results){
        foreach ($results as $line) {
            $currentId = $line['ID'];
            $currentNom = $line['nom'];
            $currentPrenom = $line['prenom'];
            $currentService = $line['service'];
            $utilisateur = new Utilisateur($currentId, $currentNom, $currentPrenom, $currentService );
            $utilisateurs[]= $utilisateur;
        }
    
        return $utilisateurs;
    }
    //getAllUser()
    //getUser($id)