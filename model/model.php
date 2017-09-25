<?php
    

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

        return $results;
        

    }

    function getUser($id) {
        
                $db = connectionDB();
                $query = "SELECT * FROM utilisateur WHERE ID='$id'";
                $stmt = $db->query($query);
                $results = $stmt->fetchAll();
        
                return $results;
                
        
            }


    //getAllUser()
    //getUser($id)