<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=wikynov', 'root', 'root');

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
	$getid = intval($_GET['id']);
	$requser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
	$requser->execute(array($getid));
	$userinfo = $requser->fetch();

}
if(isset($_POST['Envoyer']))
{
	$titre = htmlspecialchars($_POST['titre']);
	$message = htmlspecialchars($_POST['message']);;
	if(!empty($_POST['titre']) AND !empty($_POST['message']))
	{
						
						$insertmbr = $bdd->prepare("INSERT INTO posts(titre, message) VALUES (?, ?)");
						$insertmbr->execute(array($titre, $message));
						$good = "Votre article a bien été posté !";
		
	}
	else
	{
		$erreur = "Rentrez un titre et une description";
	}
}
class FileFromDB {
private $filename;
public function __construct($filename) {
$this->filename = $filename;
}
}
$message = null;
if (isset($_FILES['myFile'])) {
$File = new FileFromDB($_FILES['myFile']['name']);
$File->upload($_FILES['myFile']);
$message = 'Votre fichier à bien été ajouté';
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
							<input type="text" name="titre" class= "form-control" id="title" value="<?php if(isset($titre)) {echo $titre;} ?>"/>
						</div>
						<div class="row">
							<div class="col-md-12" id="tres">
								<label for="message" id="non2"><h3>Description :</h3></label>
								<br />									
								<textarea name="message" cols="80" rows="5" class="form-control2" value="<?php if(isset($message)) {echo $message;} ?>"></textarea>
							</div>
						</div>
						<div class="PJ">
							<input type="file" -file upload control />
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<p class="text-center">
									<input type="submit" name="Envoyer" value="Envoyer" class="envoyer" />
								</p>
							</div>
						</div>
					</div>
		</div>
	 	<?php include("footer.php"); ?>
	</body>
</html>