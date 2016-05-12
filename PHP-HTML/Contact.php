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
							<label for="first_name" id="prems">Prénom</label>
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
							<br /><input type="text" name="email_address" class= "form-control" id="grand"/>
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
	 	<?php include("footer.php"); ?>
	</body>
</html>