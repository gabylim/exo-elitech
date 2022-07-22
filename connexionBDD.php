

<?php 
#connexion a la BDD 

// try {
	



// $hoste="mysql:host=localhost;dbname=dataBase; charset=utf8";
// $login="root";
// $mdp="";

// $erreure=array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION);//erreur de syntaxe (variable pour récup l'érreur de syntaxe)

// $bdd=new PDO($hoste,$login,$mdp,$erreure); // Crée une instance PDO représentant une connexion à la base de données


// } catch (Exception $e) { //en cas de probleme de connecxion

// 	die('Erreur :'.$e->getMessage());
	
// }


try 
{   
// connexion à la base de données
	$serveur="localhost";
	$nomBDD="utilisateurs";
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



 ?>