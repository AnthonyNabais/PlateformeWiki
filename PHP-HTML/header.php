<!doctype html>
<html lang="fr">
	<head>
	  <meta charset="utf-8">
	  <title>WikYnov</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<div class="header">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header" >
						<a class="navbar-brand" id="home" href="accueil.php" ><h1>WikYnov</h1>
							<img id="logo" src="images/logo-ynov.png">
						</a>
					</div
					<form class="navbar-form navbar-right" method="POST" action="" >
						<div>
							<a href="deconnexion.php"><button type="submit" class="btn btn-default navbar-btn" name="formconnect">Me Déconnecter</button></a>
							<div id="searchbar">
				                <form action="" class="formulaire">
				               		<input class="champ" type="text" placeholder="Rechercher" />
				                    <button type="button" class="btn btn-default btn" id="search">
  										<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
									</button>
				                </form>
			                </div>
							<?php
				  		  		if(isset($erreur))
				  		  		{
				  		  			echo '<font color="red">'.$erreur."</font>";
				  		  		}
				  		    ?>
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li>
									<a href="accueil.php" id="test2"><h2 id="test">Accueil</h2></a>
								</li>
								<li>
									<a href="Discussion.php" id="test2"><h2 id="test">Poster Article</h2></a>
								</li>
								<li> 
									<a href="Theme.php" id="test2"><h2 id="test">Thèmes<h2></a>
								</li>
								<li>
									<a href="Contact.php" id="test2"><h2 id="test">Contact</h2></a>
								</li>
							</ul>
						</div>
					</form>
				</div>
			</nav>
		</div>