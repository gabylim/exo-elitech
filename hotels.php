<?php 
session_start();

 ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="" sizes="16X16">
    <title>Document</title>

    <style>

    .navbar-expand-sm{
        opacity:0.7;

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
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <li class="nav-item ">
                <a class="nav-link" href="index.php">ACCUEIL </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="hotels.php">HOTELS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacts.php">CONTACTEZ-NOUS</a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
               
                
               <?php 
                           if (isset($_SESSION["authentification"])&&$_SESSION["authentification"]==true) { // testé si l'user si il est connecté
               
                               ?><a class="nav-link" href="logout.php">Se déconnecter</a><?php
                           }else{?>
                            <a class="nav-link" href="connexion.php">Connexion</a>
                           <?php
               
                           }
                            ?>
                           </li>
            </li>

        </ul>

    </div>
</nav>

<div class="container-fluid">
    <div class="container mt-4 py-5 text-center">
        <h2>LES PLUS BEAUX HÔTELS DE CHARME EN CORSE</h2>
        <p class="prentationHotels text-justify py-3">
        La bien-nommée île de beauté a tout pour envoûter ses visiteurs. Plages sauvages de sable fin et d’eau translucide, pinèdes touffues et criques accidentées, chemins de randonnée encadrés par l’odeur du maquis, campagne, montagne… Ici, le charme authentique du mode de vie rural s’allie avec la dolce vita méditerranéenne, accentuée par l’insularité. Découvrir l’île reste un privilège, à plus forte raison lorsque l’on dépose ses valises dans l’un des plus beaux hôtels de charme de Corse.
        </p>
        <h4 class="my-5">Les plus beaux hôtels de Corse</h4>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4  col-sm-12 border px-0  mx-2">
                <img src="images/hotel-bastia.jpg" alt="hotel" width="100%" height="180">
                <p class="text-justify mx-1">Entre Bastia et la Cap corse, l’hôtel Misincu fait rimer luxe et écologie. Ses efforts en matière de gestion de l’eau, d’énergie solaire et de réduction et tri des déchets se sont ainsi vus récompensés par l’écolabel européen AFNOR.</p>
            </div>

            <div class="col-lg-3 col-md-4  col-sm-12 border  px-0  mx-2">
                <img src="images/ajaccio-hotels.jpg" alt="hotel" width="100%" height="180">
                <p class="text-justify mx-1">La grande terrasse de l'Hôtel ouvre magnifiquement sur la mer toute proche, à l'ombre des pins parasols et des palmiers. Elle est le principal lieu à vivre de l'Hôtel : du petit-déjeuner à l'heure du thé, jusqu'aux moments de l'apéritif et du digestif.</p>
            </div>

            <div class="col-lg-3 col-md-4  col-sm-12 border  px-0  mx-2">
                <img src="images/calvi-hotels.jpg" alt="hotel" width="100%" height="180">
                <p class="text-justify">L’hôtel A Casa di Mà à Lumio, hôtel proche de Calvi et de l'Ile Rousse, est très heureux de vous accueillir lors de votre séjour en Corse et vous invite à découvrir la Balagne, l’une des plus belles régions de Corse</p>
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









<script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js " integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js " integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k " crossorigin="anonymous "></script>
</body>
</html>
