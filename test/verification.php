<?php 
    session_start();
    require_once 'config.php';

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $user = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $check = $bdd->prepare('SELECT  user, mdp FROM users WHERE user = ?');
        $check->execute(array($user));
        $data = $check->fetch();
        $row = $check->rowCount();
        if($row == 1)
        {
            if(filter_var($user, FILTER_VALIDATE_EMAIL))
            {                
                if(password_verify($password, $data['password']))
                {
                    $_SESSION['user'] = $data['username'];
                    header('Location: index.php');
                    die();
                }else{ header('Location:connexion.php'); die(); }
            }else{ header('Location: connexion.php'); die(); }
        }else{ header('Location: connexion.php'); die(); }
    }
