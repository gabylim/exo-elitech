<?php 

session_start();


try {
	include("connexionBDD.php"); //inclure le fichier de connexion a la bdd afin d'utilisé c'est variable (instance "$bdd")

    //récupe les données de formaulaire saisi par l'user 
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $username=$_POST["username"];
    $userpassword=$_POST["userpassword"];


$insert=$bdd->prepare("INSERT INTO user(nom,prenom,username,userpassword) VALUES(?,?,?,?)"); // requette préparé 
$insert->execute(array($nom,$prenom,$username,$userpassword));//exicuté la requette avec le tableaux de parametre qui contien les champs récupéré de formulaire 

$insert->closeCursor();  //Ferme le curseur, permettant à l'instruction d'être à nouveau exécutée
$_SESSION["inscri"]=1;
header("location:connexion.php");


	
} catch (Exception $e) { // si l'inscription n'est pas effectué resté sur la page d'inscription 

    $_SESSION["inscri"]=0;
	
	header("location:inscrip.php");


}






 ?>