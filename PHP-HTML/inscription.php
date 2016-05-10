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
		<div class="contenu">
				<div class="formulaire1">
					<form  method="POST" action="">
	        
			            <table>

			            	<p><h2>Informations du Compte</h2></p>


			            	<tr>
				            
					            <td><label for="nom"><h4>Votre nom :</h4></label></td>
					            <td><input type="text" placeholder="Votre Nom" name="nom" id="nom" value="<?php if(isset($nom)) {echo $nom;} ?>"/></td>
				            
				            </tr>

				            <tr>
				            
					            <td><label for="prenom"><h4>Votre Prenom :</h4></label></td>
					            <td><input type="text" placeholder="Votre Prenom" name="prenom" id="prenom" value="<?php if(isset($prenom)) {echo $prenom;} ?>"/></td>
				            
				            </tr>
				            
				            <tr>
				            
					            <td><label for="mdp"><h4>Mot de Passe :</h4></label></td>
					            <td><input type="password" placeholder="Mot de Passe" name="mdp" id="mdp"/></td>
			           		 </tr>
				            
				            <tr>
					            
					            <td><label for="mdp2"><h4>Confirmer Mot de Passe :</h4></label></td>
					            <td><input type="password" placeholder="Confirmer Mot de Passe" name="mdp2" id="mdp2"/></td>

					        </tr>

					         <tr>
				            
					            <td><label for="mail"><h4>Adresse Mail :</h4></label></td>
					            <td><input type="email" placeholder="Adresse Mail" name="mail" id="mail" value="<?php if(isset($mail)) {echo $mail;} ?>"/></td>
			           		 </tr>

			           		 <tr>
			           		 		<td><label for="ecole"><h4>Choisir École :</h4></label></td>
								    <td><form class="choisir" method="POST" action="" >
									<select name="École" class="styled-select">
										<option value="value0" selected disabled>École</option> 
										<option value="Ingésup">Ingésup</option> 
										<option value="ESSCA">ESSCA</option>
										<option value="Infosup">Infosup</option>
										<option value="LIMMART">LIMMART</option>
									</select>
									</form></td>
							</tr>

			           		 	<td></td>
			           		 	<td><input type="submit" name="forminscription" value="S'inscrire"></td>
			           		 	<td></td>
			           		 	<td><a href="index.php">Retourner à l'accueil</a></td>
			           		 </tr>
				            
				            </table>
				    
			        
			  		  </form>
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