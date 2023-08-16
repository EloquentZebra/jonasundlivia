<?php
	include('includes/credentials.php');
	$validPw = '7ddd5e9c36898d86b3902a07c606dea8';

	/* Blacklist some IPs */
	$blacklist = array(
		// '165.225.95.49', Office IP
		// etc.
	);

	$ip = isset($_SERVER['REMOTE_ADDR']) ? trim($_SERVER['REMOTE_ADDR']) : '';

	if (($key = array_search($ip, $blacklist)) !== false) {
		http_response_code(403);
		echo trim('
			<!DOCTYPE html><html><head><title>403</title></head><body><h1><code>403 Forbidden</code></h1><p>You are forbidden from accessing this resource!</p></body></html>');
		exit();
	}

	/* start Session */
	ob_start();
	session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<?php include('includes/sitehead.php'); ?>
</head>
<body class="login-page text-center">
	<section class="wrapper login-wrapper container ">
		<h1 class="text-center"><strong>Wir heiraten.</strong></h1>
		<form action="" method="post">
			<?php
				if (isset($_POST['password'])) {
					$pw = htmlspecialchars($_POST['password']);
					$pw = md5(strtoupper($pw));

					if ($pw === $validPw) {
						$_SESSION['login'] = true;
						header('Location: infos.php');
					} else {
						echo '<p class="text-center">Das Passwort ist falsch.</p>';
					}
				} elseif (htmlspecialchars($_GET['loggedIn']) == "false") {
					echo '<p class="text-center">Bitte melde dich mit dem Passwort an.</p>';
				}
			?>
			<input type="password" name="password" id="password" placeholder="Passwort" class="text-center" autofocus>
			<input type="submit" value="Login">
		</form>
	</section>
	<script async src="https://cornflower-yak.pikapod.net/script.js" data-website-id="7dbea3cf-f170-4b1b-b0d7-7b29722d01d6"></script>
</body>
</html>
