<?php 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=wikynov', 'root', 'root');
if(isset($_POST['forminscription']))
{
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$mail = htmlspecialchars($_POST['mail']);
	$salt1 = "Mop$$!:;54hhmp";
	$salt2 = "JeNeMangePas500KgDePouletEn153Joursa8$";
	$mdp = $salt1.$_POST['mdp'].$salt2;
	$mdp2 = $salt1.$_POST['mdp2'].$salt2;
	$mdp = sha1($_POST['mdp']);
	$mdp2 = sha1($_POST['mdp2']);
	if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
	{
		
		if (filter_var($mail, FILTER_VALIDATE_EMAIL))
		{
		    if (preg_match("/^[a-zA-Z ]+[.]+[a-zA-Z]+@ynov[.]com$/",$mail)) 
		    {
				$reqmail = $bdd->prepare("SELECT * FROM users WHERE mail = ?");
				$reqmail->execute(array($mail));
				$mailexist = $reqmail->rowCount();
				if($mailexist == 0)
				{
					if ($mdp == $mdp2)
					{
						
						$rang = 0;
						$insertmbr = $bdd->prepare("INSERT INTO users(nom, prenom, mail, mdp, rang) VALUES (?, ?, ?, ?, ?)");
						$insertmbr->execute(array($nom, $prenom, $mail, $mdp, $rang));
						$good = "Votre compte a bien été créé! Retournez au portail pour vous connecter";
						
					}
					else
					{
						$erreur = "Vos mots de passe ne correspondent pas";
					}
				}
				else
				{
					$erreur = "Adresse mail déja utilisée";
				}
			}
			else
			{
				$erreur = "Rentrez votre adresse Ynov";
			}
		}
		else
		{
			$erreur = "Adresse mail non valide";
		}
		
		
	}
	else
	{
		$erreur = "Tous les champs doivent être complétés";
	}
}
?>
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
					            <td><input type="text" placeholder="Votre Prenom" name="prenom" id="prenom" value="<?php if(isset($prenom)) {echo $prenom;} ?>"/></td>
				            
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
			           		 	<td><a href="index.php"><input type="button" value="Retour Accueil" id="inscrire2"/></a></td>
			           		 </tr>
				            
				            </table>
					            <?php
			  		  		if(isset($erreur))
			  		  		{
			  		  			echo '<font color="red">'.$erreur."</font>";

			  		  		}
			  		    ?>
			  		    <?php
			  		  		if(isset($good))
			  		  		{
			  		  			echo '<font color="green">'.$good."</font>";

			  		  		}
			  		    ?>
			  		  </form>
			  	</div>
		</div>
		<?php include("footer.php"); ?>
	</body>
</html>