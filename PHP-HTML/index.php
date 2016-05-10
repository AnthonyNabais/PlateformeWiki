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
						<a class="navbar-brand" id="home" href="index.php" ><h1>WikYnov</h1>
							<img id="logo" src="logo-ynov.png">
						</a>
					</div
					<form class="navbar-form navbar-right" method="POST" action="" >
						<div>
							<button type="submit" class="btn btn-default navbar-btn" name="formconnect">Connexion</button>
							<a href="inscription.php"><button ui-sref="register" type="button" class="btn btn-default navbar-btn">Inscription</button></a>
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
									<a href="index.php" id="test2"><h2 id="test">Accueil</h2></a>
								</li>
								<li>
									<a href="Discussion.php" id="test2"><h2 id="test">Discussion</h2></a>
								</li>
								<li> 
									<a href="Theme.php" id="test2"><h2 id="test">Thème<h2></a>
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
	 	<footer>
				<div id="footer">
					<div class="container">
						<div class="row">
							<div class="contactinfo col-sm-3 main-el">
								<div class="divider divider-5">
									<h5>Contact Info</h5>
								</div>
								<div class="contact-widget">
									<div class="line">
										<i class="address"></i> <div class="text">27 avenue de Fontarrabie 75020 Paris</div>
									</div>
									<div class="line">
										<i class="phone"></i>
										<div class="text">01.64.49.72.11</div>
									</div>
									<div class="line">
										<i class="mail"></i>
										<div class="text">contact @ wikynov.com</div>
									</div>
									<div class="line">
										<i class="site"></i>
										<div class="text"><a href="" target="_blank">www.wikynov.com</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="botbar">
						<div class="container">
							<p class="copyright-text">
								<h5> Copyright 2016  - <a href="/mentions-legales">Mentions légales</a> - <a href="/conditions-generales-dutilisation">Conditions générales
								d'utilisation</a></h5>
							</p>     
						</div>
					</div>
				</div>
			</footer>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>