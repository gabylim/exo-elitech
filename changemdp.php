<?php session_start() ?>
<html>
    <head>
       <meta charset="utf-8">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="" sizes="16X16">
        
       <style>
 
.navbar-expand-sm{
        opacity:0.7;

    }
#container{
    width:400px;
    margin:0 auto;
    margin-top:10%;
}
/* Bordered form */
form {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#container h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: #7ab1e7 ;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: #7ab1e7 ;
    border: 1px solid  #7ab1e7 ;
}
       
       </style>
    </head>
    <body>


    

  <!--  <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark"  >
    <a class="navbar-brand" href="#">Corsica Tours</a>

    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav  mx-auto mt-2 mt-lg-0" >


        


            <li class=" nav-item " >
                <a class="nav-link" href="index.php">ACCUEIL </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hotels.php">HOTELS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacts.php">CONTACTEZ-NOUS</a>
            </li>
           


            <li class="nav-item dropdown active">

               
                
<?php 
            if (isset($_SESSION["authentification"])&&$_SESSION["authentification"]==true) { // testé si l'user si il est connecté

                ?> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><?php echo''. $_SESSION["user"].''; ?></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="changemdp.php"><b>Modifier mon mot de passe<b></a>
                        <a class="dropdown-item" href="logout.php">Se déconnecter</a>
                    </div>
                
                <?php
            }else{?>
             <a class="nav-link" href="connexion.php">Connexion</a>
            <?php

            }
             ?>
            </li>
           

        </ul>

    </div>
</nav>-->
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="login.php" method="POST">
                <h3>Modifier le mot de passe</h3>
                
                <label><b>Ancien mot de passe</b></label>
                <input type="password" placeholder="Entrer l'ancien mot de passe'" name="userpassword" required>

                <label><b>Nouveau mot de passe</b></label>
                <input type="password" placeholder="Entrer le nouveau mot de passe" name="newuserpassword" required>



                <input type="submit" id='submit' value='Valider' >
                
            </form>
            <a href="#" class="text-center">Désactiver mon compte</a>


           
        </div>
    </body>
</html>