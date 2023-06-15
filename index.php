<?php
	require('includes/credentials.php');

	/* Blacklist some IPs */
	$blacklist = array(
		'165.225.95.49',
		// etc.
	);

	$ip = isset($_SERVER['REMOTE_ADDR']) ? trim($_SERVER['REMOTE_ADDR']) : '';

	if (($key = array_search($ip, $blacklist)) !== false) {
		http_response_code(403);
		echo trim('
			<!DOCTYPE html><html><head><title>403</title></head><body>You are forbidden from accessing this resource!</body></html>');
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
				$pw = htmlspecialchars($_POST['password']);
				if (isset($_POST['password'])) {
					if ($pw == $validPw || $pw = strtoupper($validPw)) {
						$_SESSION['login'] = true;
						header('Location: infos.php');
					} else {
						echo '<p class="text-center">Das Passwort ist falsch.</p>';
					}
				} elseif (htmlspecialchars($_GET['loggedIn']) == "false") {
					echo '<p class="text-center">Bitte melde dich mit dem Passwort an.</p>';
				}
			?>
			<input type="password" name="password" id="password" placeholder="Passwort" class="text-center">
			<input type="submit" value="Login">
		</form>
	</section>
</body>
</html>