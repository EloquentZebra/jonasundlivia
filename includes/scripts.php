<script src="js/jquery.js"></script>
<script src="js/party.js"></script>
<script>
	$(document).ready(function() {
		var colors = ["#00ABAE", "#E5007D", "#009ee3", "#a5027d", "#739600", "#1F5EA8", "#F72C2C", "#FA5021", "#FB9F54", "#FFAD00", "#55C934", "#4CAF58", "#1FA895", "#1FD2DB", "#2196F3", "#61338F", "#B32E37"];
		var rand = Math.floor(Math.random() * colors.length);
		// $('body').css("background-color", colors[rand]);
	});

	document.querySelector(".button-konfetti").addEventListener("click", function(e) {
		sound3 = new Audio();
		sound3.src = "sounds/confetticanon.mp3";
		sound3.play();
		party.confetti(document.querySelector("body"));
		party.confetti(document.querySelector(".reveal-1"));
	});

	setTimeout(() => {
		party.confetti(document.querySelector(".reveal-1"));
		party.confetti(document.querySelector(".reveal-1"));
		setTimeout(() => {
			party.confetti(document.querySelector(".reveal-1"));
			party.confetti(document.querySelector(".reveal-1"));
			setTimeout(() => {
				party.confetti(document.querySelector(".reveal-1"));
				party.confetti(document.querySelector(".reveal-1"));
				party.confetti(document.querySelector(".reveal-1"));
				party.confetti(document.querySelector(".reveal-1"));
				party.confetti(document.querySelector(".reveal-1"));
			}, 1000);
		}, 1000);
	}, 500);

	setTimeout(() => {
		party.confetti(document.querySelector(".wissing"));
	}, 5500);
	setTimeout(() => {
		party.confetti(document.querySelector(".wissing"));
	}, 8500);

	setTimeout(() => {
		party.confetti(document.querySelector(".button-konfetti"));
	}, 3500);

	var sounds = [
		"sounds/blow1_01.mp3",
		"sounds/horn2_01.mp3",
		"sounds/horn3_01.mp3",
		"sounds/woho_01.mp3",
		"sounds/horn3_01.mp3",
		"sounds/yeah_01.mp3",
		"sounds/ohyeah_01.mp3",
		"sounds/horn2_01.mp3",
		"sounds/crowd_01.mp3",
		"sounds/blow1_01.mp3",
		"sounds/woho_01.mp3",
		"sounds/horn2.mp3",
	];

	var sound;
	var sound2;
	//function used to create a random number
	function generateRandomNumber(max) {
		return Math.floor(Math.random() * max);
	}

	function colorchange() {
		var colors = ["#00ABAE", "#E5007D", "#009ee3", "#a5027d", "#739600", "#1F5EA8", "#F72C2C", "#FA5021", "#FB9F54", "#FFAD00", "#55C934", "#4CAF58", "#1FA895", "#1FD2DB", "#2196F3", "#61338F", "#B32E37"];
		var rand = Math.floor(Math.random() * colors.length);
		$('body').css("background", colors[rand]);
	}

	function partyMode() {
		if (sound2) {
			sound2.pause();
		} else {
			sound2 = new Audio();
		}
		if ($('#button-partymode').hasClass('playing')) {
			sound2.pause();
			$('#button-partymode').removeClass('playing');
		} else {
			$('#button-partymode').addClass('playing');
			sound2.src = "sounds/wissingdance.mp3";
			sound2.play();
			sound2.loop = true;
			setInterval(colorchange, 275);
		}
	}

	function playSound() {
		var x = generateRandomNumber(sounds.length - 1);
		var soundSrc = sounds[x];
		sound = new Audio();
		sound.src = soundSrc;
		sound.play();
		party.confetti(document.querySelector("body"));
		party.confetti(document.querySelector("body"));
		party.confetti(document.querySelector(".wissing"));
	}

	document.querySelector('.button-sound').addEventListener('click', playSound);

	// Smooth scrolling to anchor
	$(document).ready(function() {
		$('a[href^="#"]').click(function(event) {
			var id = $(this).attr("href");
			var offset = 30;
			var target = $(id).offset().top - offset;
			$('html, body').animate({scrollTop:target}, 500);
			event.preventDefault();
		});
	});
</script>

<!-- Umami -->
<script async src="https://cornflower-yak.pikapod.net/script.js" data-website-id="7dbea3cf-f170-4b1b-b0d7-7b29722d01d6"></script>