<!doctype html>
<html lang="fr">
	<head>
	  <meta charset="utf-8">
	  <title>WikYnov</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/main.css">
	</head>
	<body>
	<div class="navbar-header" >
        <img id="logo3" src="images/logo-ynov.png">
    </div>
		<div class="contenu">
				<div class="formulaire1">
					<form  method="POST" action="">
	        
			            <table>

			            	<p><h2 id="special">Informations du Compte</h2></p>


			            	<tr>
				            
					            <td><label for="nom"><h4>Votre Nom :</h4></label></td>
					            <td><input type="text" placeholder="Votre Nom" name="nom" id="nom" value="<?php if(isset($nom)) {echo $nom;} ?>"/></td>
				            
				            </tr>

				            <tr>
				            
					            <td><label for="prenom"><h4>Votre Prénom :</h4></label></td>
					            <td><input type="text" placeholder="Votre Prénom" name="prenom" id="prenom" value="<?php if(isset($prenom)) {echo $prenom;} ?>"/></td>
				            
				            </tr>

				            <tr>
				            
					            <td><label for="mail"><h4>Adresse Mail :</h4></label></td>
					            <td><input type="email" placeholder="Adresse Mail" name="mail" id="mail" value="<?php if(isset($mail)) {echo $mail;} ?>"/></td>
			           		 </tr>
				            
				            <tr>
				            
					            <td><label for="mdp"><h4>Mot de Passe :</h4></label></td>
					            <td><input type="password" placeholder="Mot de Passe" name="mdp" id="mdp"/></td>
			           		 </tr>
				            
				            <tr>
					            
					            <td><label for="mdp2"><h4> Confirmer Mot de Passe :</h4></label></td>
					            <td><input type="password" placeholder="Confirmer Mot de Passe" name="mdp2" id="mdp2"/></td>

					        </tr>
			           		 <tr>
			           		 		<td><label for="ecole"><h4>Choisir École :</h4></label></td>
								    <td><form class="choisir" method="POST" action="" >
									<select name="École" class="barre">
										<option value="value0" selected disabled></option> 
										<option value="Ingésup">Ingésup</option> 
										<option value="Infosup">Infosup</option>
										<option value="ESSCA">ESSCA</option>
										<option value="ESTEI">ESTEI</option>
										<option value="ISEE">ISEE</option>
										<option value="EICAR">EICAR</option>
										<option value="Lim'art">Lim'art</option>
									</select>
									</form></td>
							</tr>
			           		 	<td><input type="submit" name="forminscription" value="S'inscrire" id="inscrire"></td>
			           		 </tr>
				            
				            </table>
			  		  </form>
			  	</div>
		</div>
	</body>
</html>