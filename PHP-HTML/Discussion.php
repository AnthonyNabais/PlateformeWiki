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
						<div class="col-md-5" id="deuz">

							<label for="titre"><h3>Titre :</h3></label>
							<input type="text" name="titre" class= "form-control" id="title"
							value="<?php echo isset($_SESSION['inputs']['titre'])? $_SESSION['inputs']['titre'] : ''; ?>"/>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12" id="tres">
							<label for="message" id="non2"><h3>Description :</h3></label>
							<br />									
							<textarea name="message" cols="80" rows="5" class="form-control2" >
							<?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
						</div>
					</div>
					<div class="PJ">
					<input type="file" -file upload control></input>
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
	 	<?php include("footer.php"); ?>
	</body>
</html>