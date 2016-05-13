<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=wikynov', 'root', 'root');

if(isset($_POST['Envoyer']))
{
	$titre = htmlspecialchars($_POST['titre']);
	$message = htmlspecialchars($_POST['message']);
	$auteur = htmlspecialchars($_POST['auteur']);
	if(!empty($_POST['titre']) AND !empty($_POST['message']) AND !empty($_POST['auteur']))
	{
						
						$insertmbr = $bdd->prepare("INSERT INTO posts(titre, message, auteur) VALUES (?, ?, ?)");
						$insertmbr->execute(array($titre, $message, $auteur));
						$good = "Votre article a bien été posté !";
		
	}
	else
	{
		$erreur = "Rentrez un titre, une description et un auteur";
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
	  <script src="ckeditor/ckeditor.js"></script>
	  <script src="ckeditor/samples/js/sample.js"></script>

	</head>
	<body>
		<?php include("header.php"); ?>
		<div class="formulaire4">
				<br>
					<div class="row">
						<div class="col-md-2" id="first">
								<label for="theme"><h4 id="idk">Choisir Thème :</h4></label></td>
								    <form class="choisir" method="POST" action="" >
										<select name="theme" class="barre1">
											<option value="value0" selected disabled></option> 
											<option value="Certifications">Certifications</option> 
											<option value="Partiels">Partiels</option>
											<option value="Projets">Projets</option>
											<option value="Exercices">Exercices</option>
											<option value="StartupDay">Startup Day</option>
											<option value="Documentations">Documentations</option>
										</select>
									</form>
						</div>
						<form method="POST" action="">						
						<div class="col-md-5" id="deuz">
							<label for="titre"><h3>Titre :</h3></label>
							<input type="text" name="titre" class= "form-control" id="title" value="<?php if(isset($titre)) {echo $titre;} ?>"/>
						</div>
						<div class="col-md-2" id="second">
								<label for="auteur"><h4 id="idk">Auteur :</h4></label>
								<input type="text" name="auteur" class= "form-control" id="auteur" value="<?php if(isset($auteur)) {echo $auteur;} ?>"/>
								    
						</div>
					</div>
					<div class="row">
						<div class="col-md-12" id="tres">
							<label for="message" id="non2">	
								<div class="grid-container">
									<div class="grid-width-100">
									<h3>Description :</h3></label>
							<br />	
							<div class="grid-container">
								<div class="grid-width-100">
									<textarea name="message" cols="80" rows="5" class="form-control2" id="editor" value="<?php if(isset($message)) {echo $message;} ?>"></textarea>
								</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="PJ">
						<input type="file" -file upload control></>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">
								<input type="submit" name="Envoyer" value="Envoyer" class="envoyer"/>
							</p>
						</div>
					</div>
			</div>
			</form>
		</div>
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
	 	<?php include("footer.php"); ?>
	 	<script>
	 	initSample();
	 	</script>
	</body>
</html>