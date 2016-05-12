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
                <input class="meh" type="text" placeholder="Adresse Mail" />
                <input class="meh2" type="text" placeholder="Mot de Passe" />
                <br>
                <button type="submit" class="btns" name="formconnect" onclick="self.location.href='accueil.php'">Connexion</button>
            </div>
            <div class="inscript">
                <h2 id="rigolo">Pas de compte? Inscrivez vous !</h2>
                <button type="submit" class="btns" name="formconnect" onclick="self.location.href='inscription.php'">Inscription</button>
            </div>
        </form>
    </div>
    </body>
</html>