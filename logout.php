<?php 

session_start();
session_destroy(); //détruire la session ainsi que les variable de session 
header("location:connexion.php"); // redirigé ver la page de connexion





 ?>