<?php 
    // try 
    // {

    //     $bdd = new PDO("mysql:host=HOST;dbname=utilisateur;charset=utf8", "LOGIN", "PASS");
    // }
    // catch(Exception $e)
    // {
    //     die('Erreur : '.$e->getMessage());
    // }

    try 
    {   
    // connexion à la base de données
        $serveur="localhost";
		$nomBDD="utilisateur";
		$utilisateur="root";
		$mdp="";
		$port=3308;
        $bdd = new PDO("mysql:host=".$serveur.";port=".$port.";dbname=".$nomBDD, $utilisateur, $mdp,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }