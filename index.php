<?php 
session_start();

 ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="" sizes="16X16">
    <title>Document</title>

    <style>

    .navbar-expand-sm{
        opacity:0.7;

    }
    .carousel-caption{

        width:auto;
        max-width:400px;
        background-color: #000;
        opacity:0.7;
        margin:auto;
    }


    .carousel-item img{

height:600px;
    }
    .rounded-circle{
        max-width:80px;
    }

    .rounded-circle img{
        width:100%;
    }
    section{
margin: 10px 20px;

    }
    section .row{
padding-top:20px


    }
    section .row .col p{
        width:200px;
    }
    section .row img{
        border:solid 1px #000;
        width: 100%;
        max-width:400px;
        margin:auto;

    }

    .centered {
        font-weight:bold;
        background-color: #000;
        opacity:0.7;
        color:#fff;
        width:80px;
        position: absolute;
        top: 80%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .corsica{
        background-color:#EFEFEF;
        height:auto;
        max-height:400px;

    }
    @media (max-width :1000px){
        .carousel-item img{
            height:500px;
        }
    }
    footer .footer{
        background-color: #5257c6;
        color:white;

    }
    .copyright{
        color:white;
        background-color: rgb(49, 48, 48);
        text-align:center;

    }



    </style>
</head>
<body>

<nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark"  >
    <a class="navbar-brand" href="#">Corsica Tours</a>

    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav  mx-auto mt-2 mt-lg-0" >


        


            <li class=" nav-item active" >
                <a class="nav-link" href="index.php">ACCUEIL </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hotels.php">HOTELS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacts.php">CONTACTEZ-NOUS</a>
            </li>
           


            <li class="nav-item dropdown ">

               
                
<?php 
            if (isset($_SESSION["authentification"])&&$_SESSION["authentification"]==true) { // testé si l'user si il est connecté

                ?> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><?php echo''. $_SESSION["user"].''; ?></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="changemdp.php">Modifier mon mot de passe</a>
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
</nav>

<div class="container-fluid">
    <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="images/corse2.jpg" alt="corse" width="100%" >
        <div class="carousel-caption">
            <h3>CORSE</h3>
            <p>une petite ville magnifique</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="images/corse.jpg" alt="Corsica" width="100%" >
        <div class="carousel-caption">
            <h3>CORSE</h3>
            <p>profitez des vacances en Corse!</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="images/corse1.jpg" alt="corsee" width="100%" >
        <div class="carousel-caption " >
            <h3>CORSE</h3>
            <p>On aime Corse!</p>
        </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    </div>

    <div class="row justify-content-center mt-2">
        <div class=" rounded-circle  text-center">
            <a href="#visitCorse"><img src="images/scroll.png" alt="scroll down"></a>
        </div>
    </div>



    <section id="visitCorse">
        <div class="container">
            <h2 class="text-center">Venez visiter Corsica!</h2>

            <!-- CALVI-->
            <div class="row mx-auto">
                <div class="col-lg-6 col-md-8  col-sm-12 text-center"><img src="images/calvi.jpg" alt="calvi"><div class="centered">CALVI</div> <div><a>Voir Plus</a></div></div>
                <div class="col-lg-4 col-md-4 col-sm-12 my-auto text-justify"><p class="presentVille">Êtes-vous déjà partis visiter <strong>Calvi en Corse?</strong> Savez-vous <strong><a href="hotels.php">où dormir à Calvi ?</a></strong>
                Une petite cité médiévale implantée sur la côte Méditerranéenne en Haute Corse. Un endroit de rêve pour passer des vacances ou des week-ends, et cela que ce soit en famille ou entre amis.
                <br>Sa plage d’un bleu azur, surplombée par des montagnes (barrière naturelle : le massif du Monte Cinto) et de son rocher ou domine une cité médiévale (une magnifique citadelle génoise du 13ème siècle) est un véritable petit paradis où il fait bon vivre. 12 000 hab et en plein mois d’août, plus de 70 000 touristes.</p></div>
            </div>
            <!-- AJACCIO-->

            <div class="row my-2 mx-auto justify-content-center">
                <div class=" col-lg-4 col-md-4 col-sm-12 my-auto text-justify "><p class="presentVille">
                    <p>
                        Alors que 94% des vacanciers français ont séjourné dans le pays cet été, la Corse a été la première destination parmi ceux qui ont plébiscité l'avion comme moyen de transport, avec Ajaccio en pôle position comme premier point d'arrivée, selon le classement de l'agence Dreams Odigeo, spécialisée dans la billetterie aérienne en Europe.
                        <br>
                        Vous aimeriez savoir comment <strong>visiter Ajaccio ?</strong> Ce qu'il y a à faire dans ses environs? <strong><a href="hotels.php">Où dormir à Ajaccio ?</a></strong>
                    </p>
                </div>
                <div class="col-lg-6 col-md-7  col-sm-12 text-center ">
                    <img src="images/ajaccio.jpg" alt="ajaccio">
                    <div class="centered">AJJACIO</div>
                    <div><a>Voir Plus</a></div>
                </div>
            </div>

            <!-- Bastia-->
            <div class="row mx-auto">
                <div class="col-lg-6 col-md-8  col-sm-12 text-center"><img src="images/bastia.jpg" alt="Bastia"><div class="centered">BASTIA</div> <div><a>Voir Plus</a></div></div>
                <div class="col-lg-4 col-md-4 col-sm-12 my-auto text-justify"><p class="presentVille"><p>La ville de Bastia est située en Corse surnommée l’île de Beauté. C’est une commune en bord de mer, qui abrite de nombreux édifices, vestiges du passé. Elle bénéficie d’un doux climat méditerranéen et se place comme étant l’une des plus belles destinations de l’île de Beauté. L’une des raisons principales qui font de Bastia une destination touristique privilégiée est son paysage très varié. La ville regorge en effet de nombreux sites touristiques aussi bien naturels qu’historiques.</p></div>
            </div>
        </div>
    </section>



    <div class="corsica container-fluid py-3 ">
        <div class="container">
            <h1 class="text-center p">Corsica l'île de Beauté !</h1>
            <div class="row">
                <div class="col-4">
                    <img src="images/corse-carte.png" width="100%">
                </div>
                <div class="col-8 py-3 my-auto">
                    <p>Vous allez partir en <strong>voyage en Corse?</strong> Vous souhaitez savoir que <strong>faire et voir?</strong></p>
                    <p>Si la raison principale de venir en Corse, c’est pour profiter de ses sublimes plages (vous ne serez pas déçus!), il y a également plein d’autres endroits à voir en Corse et d’activités à faire.</p>
                    <p>Selon la durée de votre voyage et votre ville d’arrivée en Corse, il est évident que vous ne pourrez pas forcément tout voir.</p>
                    <p>Si vous optez pour un itinéraire en Corse d’une semaine, il vaut mieux par exemple se contenter de visiter le Sud ou le Nord.</p>

                </div>

            </div>
        </div>
    </div>

        <footer>
            <div class=" footer container-fluid">
                <div class="container py-4 pl-5 mx-auto">
                <div class="row ml-5">
                        <div class="col-6 ">
                            <h4>Corsica Tours</h4>
                            <ul>
                                <li>A propos de nous</li>
                                <li>Contactez-Nous</li>
                                <li>Visiter Corse</li>
                                <li>Reserver une chambre dans un hotel</li>
                            </ul>
                        </div>

                        <div class="col-6 ">
                            <h4>Departements </h4>
                            <ul>
                                <li>Haute-Corse</li>
                                <li>Corse du sud</li>
                            </ul>
                        </div>
                </div>



                </div>
            </div>
        </footer>
        <div class=" copyright cotainer-fluid py-3">
            <div class="container">
                <p>Nabila BENNACER <br>Copyright © 2020. All rights reserved.</p>
            </div>
        </div>







</div>


<script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js " integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js " integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k " crossorigin="anonymous "></script>
</body>
</html>
