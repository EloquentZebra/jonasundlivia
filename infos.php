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
		<article id="intro">
			<h1>Unser Hochzeitsfest</h1>
				<ul>
					<li>Datum: Samstag, 16. September 2023</li>
					<li>Zeit: ab 17 Uhr</li>
					<li>Ort: <a href="#ort">siehe unten</a></li>
				</ul>
				<p>Schaue zu einem späteren Zeitpunkt gerne wieder hier vorbei. Wir schalten fortlaufend weitere Infos zu unserer Hochzeit auf.</p>
				<p>Fragen an <a href="mailto:management@jonasundlivia.ch" data-umami-event="Click Button Kontakt Intro">management@jonasundlivia.ch</a></p>
				<section class="row text-center">
					<a href="#programm" class="button col" data-umami-event="Click Navigation Programm">Zum Programm</a>
					<a href="#ort" class="button col" data-umami-event="Click Navigation Ort">Zu Ort + Anreise</a>
					<a href="#dressocde" class="button col" data-umami-event="Click Navigation Dresscode">zum Dresscode</a>
					<a href="#geschenk" class="button col" data-umami-event="Click Navigation Geschenk">zu Hochzeitsgeschenk</a>
					<a href="#party" class="button col" data-umami-event="Click Navigation Party">zur Playlist</a>
				</section>
		</article>

		<article id="programm" class="update">
			<section id="cd-timeline" class="cd-container">
				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-standard">
						<img src="img/timeline/eintreffen.svg" alt="">
					</div>
					<div class="cd-timeline-content">
						<h2>Eintreffen</h2>
						<span class="cd-date">ab 17  Uhr</span>
					</div>
				</div>


				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-standard">
						<img src="img/timeline/food.svg" alt="">
					</div>
					<div class="cd-timeline-content">
						<h2>Essen</h2>
						<p>Bedient euch an den verschiedenen Ständen</p>
						<span class="cd-date">17-21 Uhr</span>
					</div> 
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-standard">
						<img src="img/timeline/party.svg" alt="">
					</div>
					<div class="cd-timeline-content">
						<h2>Party</h2>
						<p>Schwingt das Tanzbein</p>
						<span class="cd-date">ab 21:30 Uhr</span>
					</div> 
				</div>

				<div class="cd-timeline-block">
					<div class="cd-timeline-img cd-standard">
						<img src="img/timeline/ende.svg" alt="">
					</div>
					<div class="cd-timeline-content">
						<h2>Ende Gelände</h2>
						<p>Auch das schönste Fest geht leider irgendwann zu Ende.</p>
						<span class="cd-date">03:00 Uhr</span>
					</div> 
				</div>

			</section>
		</article>


		<article id="ort" class="update">
			<h1>Ort</h1>
			<p><a href="https://www.tipioase.ch/" target="_blank" rel="noopener noreferrer" data-umami-event="Click Link Tipioase">Tipioase</a>, Weidenstrasse 50, 4143 Dornach</p>
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
				<li>Auto: Auch die Anreise mit dem Auto ist möglich. Neben und beim Veranstaltungsort stehen genügend Parkplätze zur Verfügung.<br>Für die Anreise mit dem Navi bitte nach &quot;<a href="https://www.google.com/maps/dir//Swissmetal+Industries+AG,+Weidenstrasse+50,+4143+Dornach/@47.4792417,7.6083138,565m/data=!3m1!1e3!4m12!1m2!2m1!1sswissmetal+dornach!4m8!1m0!1m5!1m1!1s0x4791c878fa027903:0x48d29e3589e4da35!2m2!1d7.6088469!2d47.4790875!3e3?entry=ttu" target="_blank" rel="noopener noreferrer">Swissmetal Dornach</a>&quot; navigieren. Die Navigation führt euch direkt vor das grosse Eingangstor des "Wydeneck-Areals". Der Parkplatz befindet sich dann direkt links <u>vor</u> dem grossen Tor. Danach folgt ein kurzer Fussweg: Unmittelbar nach dem grossen Tor und vor dem orangen Velopa-Gebäude rechts halten, nach 50 Metern dem Wegweiser folgen.</li>
			</ul>
		</article>

		<article id="dressocde" class="update">
			<h1>Dresscode</h1>
			<p>So, wie ihr euch wohl fühlt. Ihr dürft euch gerne auch ein bisschen chique machen.</p>
			<p>Stilettos sind auf dem Areal nicht praktisch, gerne dürft ihr flache Schuhe anziehen.</p>
		</article>

		<article id="geschenk">
			<h1>Hochzeitsgeschenk</h1>
			<p>Wie du sicherlich weisst, haben wir vor einiger Zeit die Chance gehabt, ein Haus zu kaufen. Seit einigen Monaten wohnen wir jetzt bereits zusammen dort und sind immer mal wieder am etwas Umgestalten, Umstellen, Umbauen und was sonst noch alles machbar ist in einem Haus.</p>
			<p>Gewisse Dinge schaffen wir aber leider nicht mit eigener Muskelkraft und Hirnschmalz und wir brauchen Hilfe von Fachpersonen.</p>
			<p>Und weil bei einem Haus verschiedenste Dinge anstehen und diese nicht alle immer ganz günstig sind, macht ihr uns die grösste Freude, wenn ihr unseren Traum von unserem perfekten Eigenheim unterstützt.</p>
			<p>Lass uns wissen, was wir deiner Meinung nach zuerst angehen sollen.</p>
			<p>Gerne darfst du uns deinen Batzen elektronisch auf unser extra hierfür eingerichtetes Konto oder am Fest selber zukommen lassen.</p>
			<p>Schon jetzt und auf diesem Weg ein riesiges Dankeschön!</p>
			
			<div class="gift-container-wrapper">
			<section class="gift-container">
					<img src="img/haus.jpg" alt="Geschenk" class="gift-img-bg">

					<button onclick="openModal('keller');" class="gift-button btn-keller">+</button>
					<button onclick="openModal('allgemein');" class="gift-button btn-allgemein">+</button>
					<button onclick="openModal('parterre');" class="gift-button btn-parterre">+</button>
					<button onclick="openModal('ersterstock');" class="gift-button btn-ersterstock">+</button>
					<button onclick="openModal('dachstock');" class="gift-button btn-dachstock">+</button>
					<button onclick="openModal('garten');" class="gift-button btn-garten">+</button>
			</section>
			</div>

			<p>Wenn du dich nicht entscheiden kannst, dann freuen wir uns auch so um deine «Blanko-Spende»: <a href="downloads/ez.pdf">Blanko-Einzahlungsschein herunterladen</a></p>
		</article>

		<article id="party">
			<h1>Ich bin immer noch nicht in Partystimmung 😓</h1>
			<p>Mittlerweile haben wir von euch diverse Inputs erhalten für eine gute Stimmung. Gerne lassen wir euch daran teilhaben:</p>
			<iframe src="https://open.spotify.com/embed/playlist/39QhWayBR7lUqtW2lCIvDm?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; encrypted-media; fullscreen; picture-in-picture" loading="lazy" style="border-radius: 0.25em; background-color:white;"></iframe>
			<p>→ <a href="https://open.spotify.com/playlist/39QhWayBR7lUqtW2lCIvDm" target="_blank" rel="noopener noreferrer">Link zur Playlist</a></p>
			<div class="row text-center">
				<div class="col">
					<button class="button-konfetti" data-umami-event="Click Button Konfetti">Konfetti</button>
				</div>
				<div class="col">
					<button class="button-sound" data-umami-event="Click Button Sound">Tröööt!</button>
				</div>
				<div class="col">
					<button class="button-partymode" onclick="partyMode();" data-umami-event="Click Button Partymode">Partymodus</button>
				</div>
			</div>
		</article>
	</div>

	<?php 
		include('includes/footer.php');
		include('includes/modals.php');
		include('includes/scripts.php');
	?>
</body>
</html>
