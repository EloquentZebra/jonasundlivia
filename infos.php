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
	<?php require('includes/sitehead.php'); ?>
</head>
<body>
	<div class="container wide" id="content-wrapper">
		<article id="aftermath">
			<h1>Vielen Dank!</h1>
			<p>Wir durften mit euch ein wunderbares Fest feiern - selten gingen wir so glücklich ins Bett wie am Sonntagmorgen früh.</p>
			<p>Danke, dass ihr Teil des Fests wart. Danke, dass ihr uns mit so grosszügigen Geschenken beschenkt habt. Danke, dass ihr da wart.</p>
			<p>Schaut in den nächsten Tagen hier mal wieder vorbei. Nach und nach schalten wir Fotos vom Fest auf.</p>
	</article>

	<?php 
		include('includes/footer.php');
	?>
</body>
</html>