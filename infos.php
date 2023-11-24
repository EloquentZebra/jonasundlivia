<?php
	require('includes/credentials.php');

	ob_start();
	session_start();

	if (!isset($_SESSION['login'])) {
		header('Location: index.php?loggedIn=false');
	}

	require('includes/functions.php');
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<?php
		require('includes/sitehead.php');
		require('includes/scripts.php');	
	?>
</head>
<body>
	<div class="container wide" id="content-wrapper">
		<article id="aftermath">
			<h1>Vielen Dank!</h1>
			<p>Wir durften mit euch ein wunderbares Fest feiern - selten gingen wir so glücklich ins Bett wie am Sonntagmorgen früh.</p>
			<p>Danke, dass ihr Teil des Fests wart. Danke, dass ihr uns mit so grosszügigen Geschenken beschenkt habt. Danke, dass ihr da wart.</p>
			<p>Du möchtest uns noch was an unsere Hausrenovation geben? Dann nütze dafür den <a href="downloads/ez.pdf">Blanko-Einzahlungsschein</a>. Danke im Voraus!</p>
			<p>Wir haben noch weitere Bilder erhalten, welche unsere super Fotografin aber nicht ganzbso schön bearbeitete wie die untenstehenden. Möchtest du sie trotzdem anschauen? Dann melde dich bei uns.</p>
		</article>

		<article>
			<h1>Bilder</h1>
			<div class="galerie-grid">
				<div class="warning text-center">
				<p>Alle Bilder in voller Auflösung herunterladen:</p>
				<a href="downloads/bilder.zip"><button class="download-button">Bilder herunterladen</button></a>
				</div>
				<?php
					$dirname = 'img/hochzeit/scaled/';
					$images = glob($dirname."*.*");
					natsort($images);
					
					foreach($images as $image) {
							echo '
								<div class="grid-img-container">
									<div class="grid-img-zoom-container">
										<img src="'.$image.'" class="spotlight" alt="Hochzeit Jonas + Livia" loading="lazy">
									</div>
									<p class="image-download text-center"><a class="" href="img/hochzeit/'.basename($image).'" download>Bild herunterladen</a></p>
								</div>
								';
					}
				?>
			</div>
		</article>

	<?php 
		include('includes/footer.php');
	?>
</body>
</html>