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
							<img id="logo" src="images/logo-ynov.png">
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
					<ul class="nav navbar-nav">
						<li>
							<a href="index.php"><h2>Accueil</h2></a>
						</li>
						<li>
							<a href="Discussion.php"><h2>Discussion</h2></a>
						</li>
						<li>
							<a href="Theme.php"><h2>Thème<h2></a>
						</li>
						<li>
							<a href="Contact.php"><h2>Contact</h2></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="greyBackground">
		<div class="container2">
			<h5 id="contact1">Contactez-nous</h1>
			<h2 id="contact2">Pour toute demande d'information, n'hésitez pas à nous contacter.</h2>
			<div class="formulaire3">
				<br>
					<div class="row" id="nop">
						<div class="col-md-3">
							<label for="first_name">Prénom</label>
							<br /><input id="first_name" type="text" name="first_name" class= "form-control"/>
						</div>
						<div class="col-md-3">
							<label for="last_name">Nom</label>
							<br />
							<input id="last_name" type="text" name="last_name" class= "form-control" />
						</div>
					</div>
					<br>
					<div class="row" id="nop2">
						<div class="col-md-3">
							<label for="email_address">Adresse Mail</label>
							<br /><input type="text" name="email_address" class= "form-control"/>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<label for="message" id="non">Votre Message</label>
							<br />									
							<textarea name="message" cols="80" rows="5" class="form-control" ></textarea>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<div></div>
							<p class="text-center">
								<input type="submit" value="Envoyer" class="envoyer" />
							</p>
						</div>
					</div>
			</div>
		</div>
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