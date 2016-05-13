<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=wikynov', 'root', 'root');

$reponse =$bdd->query('SELECT * FROM posts WHERE id>"39" AND id<"50"');

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
		
			<?php while ($donnees = $reponse->fetch())
			{
				?>
				<div class="contenuhome"><?php 

				echo '<p>' . ' Titre : ' . $donnees['titre'] . ' <br> ' . $donnees['message'] . ' <br> ' . ' Auteur : ' . $donnees['auteur'] . '</p>'; ?></div>
				<?php 
			}
			?>
	 	<?php include("footer.php"); ?>
	</body>
</html>