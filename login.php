<?php 

session_start();
$trouve=false;

 include("connexionBDD.php");

 $reponce=$bdd->query("SELECT * FROM user"); //récupéré tout les user qui ce trouve dans la bdd et les mettre dans un tableaux $reponce


 while ($donnes=$reponce->fetch()) { // $donnes représente une ligne de tableaux reponce 
      //testé si le champs existe et remplis par l'user et si il est = a ce dans la bdd (si l'user et deja inscri)
 	if (isset($_POST['username'])&& $_POST['username']==$donnes['username']){
     
       if(isset($_POST['userpassword'])&&$_POST['userpassword']==$donnes['userpassword']) {
 		$trouve=true; 

 		$_SESSION["authentification"]=true; //crée une varianle de session 
        $_SESSION["user"]=$donnes["nom"];//mettre le contenu de champs (le nom de l'user) dans une variable de session afin de le transporté dans une autre page 
        header("location:index.php");}
        else{
            $_SESSION["mdpcorrecte"]=false;
            header("location:connexion.php");        }
 	
 	}


 	}	
 	if(!$trouve){
$_SESSION["erreur"]=true;

$_SESSION["authentification"]=false;
header("location:connexion.php");

}

 ?>