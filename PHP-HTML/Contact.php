<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=wikynov', 'root', 'root');

if(isset($_POST['forminscription']))
{
	
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$email = htmlspecialchars($_POST['email']);
	$message = htmlspecialchars($_POST['message']);
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
		<?php include("header.php"); ?>
		<div class="greyBackground">
		<div class="container2">
			<h5 id="contact1">Contactez-nous</h1>
			<h2 id="contact2">Pour toute demande d'information, n'hésitez pas à nous contacter.</h2>
			<div class="formulaire3">
				<br>
					<div class="row" id="nop">
						<div class="col-md-3">
							<label for="prenom" id="prems">Prénom</label>
							<br><input id="prenom" type="text" name="prenom" class= "form-control"
							value="<?php echo isset($_SESSION['inputs']['prenom'])? $_SESSION['inputs']['prenom'] : ''; ?>"/>
						</div>
						<div class="col-md-3">
							<label for="nom">Nom</label>
							<br>
							<input id="nom" type="text" name="nom" class= "form-control" 
							value="<?php echo isset($_SESSION['inputs']['nom'])? $_SESSION['inputs']['nom'] : ''; ?>"/>
						</div>
					</div>
					<br>
					<div class="row" id="nop2">
						<div class="col-md-3">
							<label for="email">Adresse Mail</label>
							<br><input type="text" name="email" class= "form-control" id="grand" 
							value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>"/>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<label for="message" id="non">Votre Message</label>
							<br>									
							<textarea name="message" cols="80" rows="5" class="form-control" >
							<?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
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
	 	<?php include("footer.php"); ?>
	</body>
</html>
<?php
unset($_SESSION['inputs']); 
unset($_SESSION['success']);
unset($_SESSION['errors']);	