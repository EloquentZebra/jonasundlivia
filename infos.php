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
<body class="container wide">
	<article id="intro">
		<h1>Unser Hochzeitsfest</h1>
			<ul>
				<li>Datum: Samstag, 16. September 2023</li>
				<li>Zeit: 15:00 Uhr bis maximal 04:00 Uhr</li>
				<li>Ort: <a href="#ort">siehe unten</a></li>
			</ul>
			<p>Schaue zu einem späteren Zeitpunkt gerne wieder hier vorbei. Wir schalten fortlaufend weitere Infos zu unserer Hochzeit auf.</p>
			<p>Fragen an <a href="mailto:management@jonasundlivia.ch">management@jonasundlivia.ch</a></p>
	</article>

	<article id="anmeldung">
		<h1>Anmeldung</h1>
		<p>Die Anmeldung ist bis zum 15. August möglich.</p>
		<div class="iframe-container anmeldung">
			<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSecJT-gSnljmoNy7KeCwV0hz1DVxEJxy8mrki8j_mO1QPG9nw/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Wird geladen…</iframe>
		</div>
	</article>

	<article id="location">
		<h1>Ort</h1>
		<p><a href="https://www.tipioase.ch/" target="_blank" rel="noopener noreferrer">Tipioase</a>, Weidenstrasse 50, 4143 Dornach</p>
		<div class="iframe-container">
			<iframe src="<?php echo($formUrl); ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="anmeldung"></iframe>
		</div>

		<h1>Anreise</h1>
		<p>Folgende Variante für die Anreise sind möglich:</p>
		<ul>
			<li>Velo: Mit dem Velo ist die Location von der Stadt Basel aus in ca. 35 Minuten zu erreichen.</li>
			<li>
				ÖV: Mit der S-Bahn S3 oder der Tramlinie 10 bis zum <a href="https://beta.sbb.ch/de?date=%222023-09-16%22&moment=%22ARRIVAL%22&stops=[{%22label%22%3A%22%22%2C%22type%22%3A%22ID%22%2C%22value%22%3A%22%22}%2C{%22value%22%3A%228500118%22%2C%22type%22%3A%22ID%22%2C%22label%22%3A%22Dornach-Arlesheim%22}]&time=%2215%3A00%22" target="_blank" rel="noopener noreferrer">Bahnhof Dornach-Arlesheim</a> fahren und von dort aus dann ca. 15 Minuten bis zur Location spazieren.<br>
				Näher bringt dich der Bus Nr. 66, Haltestelle <a href="https://beta.sbb.ch/de?date=%222023-09-16%22&moment=%22ARRIVAL%22&stops=%5B%7B%22label%22%3A%22%22%2C%22type%22%3A%22ID%22%2C%22value%22%3A%22%22%7D%2C%7B%22value%22%3A%228588751%22%2C%22type%22%3A%22ID%22%2C%22label%22%3A%22Dornach%2C+Metallwerke%22%7D%5D&time=%2215%3A00%22" target="_blank" rel="noopener noreferrer">Dornach, Metallwerke</a>. Von dort aus sind es noch gut 5 Minuten zu Fuss.			
			</li>
			<li>Auto: Auch die Anreise mit dem Auto ist möglich. Neben und beim Veranstaltungsort stehen genügend Parkplätze zur Verfügung.</li>
		</ul>
	</article>

	<article id="party">
		<h1>Ich bin immer noch nicht in Partystimmung 😓</h1>
		<div class="row text-center-on-mobile">
			<div class="col">
				<button class="button-konfetti">Konfetti</button>
			</div>
			<div class="col">
				<button class="button-sound">Tröööt!</button>
			</div>
			<div class="col">
				<button class="button-partymode" onclick="partyMode();">Partymodus</button>
			</div>
		</div>
	</article>

	<div class="branch-container branch-1">
		<img src="img/olivebranch-2.svg" alt="" class="branch">
	</div>

	<div class="branch-container branch-2">
		<img src="img/olivebranch-2.svg" alt="" class="branch">
	</div>

	<?php 
		include('includes/footer.php');
		include('includes/scripts.php');
	?>
</body>
</html>