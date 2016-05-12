<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=wikynov', 'root', 'root');


if(isset($_POST['formconnect']))
{
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if(!empty($mailconnect) AND !empty($mdpconnect))
    {
        $requser = $bdd->prepare("SELECT * FROM users WHERE mail = ? AND mdp = ?");
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if($userexist == 1)
        {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['prenom'] = $userinfo['prenom'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location: accueil.php?id=".$_SESSION['id']);
        }
        else
        {
            $erreur = "mail ou mot de passe invalide";
        }
    }
    else
    {
        $erreur = "Vous devez rentrer votre mail et votre mot de passe";
    }
}

?>

<!doctype html>
<html lang="fr">
    <head>
      <meta charset="utf-8">
      <title>Portail WikYnov</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
    <div class="navbar-header" >
        <img id="logo2" src="images/logo-ynov.png">
    </div>
    <div class="ContenuAccueil">
        <h1 id="titre">WikYnov</h1>
        <form class="portail-bt" method="POST" action="" >
            <div class="connect">
                <input type="text" class="meh" placeholder="Adresse Mail" name="mailconnect">
                <input type="password" class="meh2" placeholder="Mot de Passe" name="mdpconnect">
                <br>
                <button type="submit" class="btns" name="formconnect">Connexion</button>
            </div>
            <div class="inscript">
                <h2 id="rigolo">Pas de compte? Inscrivez vous !</h2>
                
                    <a href="inscription.php"><input type="button" class="btns" value="Inscription" id="publier2"/></a>
            </div>
        </form>
    </div>
    <?php include("footer.php"); ?>