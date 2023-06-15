<?php
	$sprueche[
		"Lieber Rum trinken als rumsitzen.",
		"Gin auf Wein passt auch noch rein",
		"Prüfungen kann man wiederholen, Partys nicht",
		"Wer feiern kann, kann auch weiterfeiern",
		"Man muss die feste feiern wie sie fallen",
		"Was du heute kannst entkorken, das verschiebe nicht auf morgen.",
		"Ein Diamant ist ein Stück Kohle, das Ausdauer hatte.",
		"Wer nie vom Weg abkommt, bleibt auf der Strecke.",
		"Es gibt keinen Weg zum Glück. Glücklichsein ist der Weg.",
		"Glück lässt sich nicht erzwingen. Aber es mag hartnäckige Menschen.",
		"Nicht die Glücklichen sind dankbar. Es sind die Dankbaren, die glücklich sind.",
		"Gib jedem Tag die Chance, der schönste deines Lebens zu werden",
		"Wer ein guter Mensch ist, verliert keine Freunde. Sie verlieren dich.",
	];

	function printSpruch() {
		$spruch = array_rand($sprueche);
		print($spruch);
	}
?>	