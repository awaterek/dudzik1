<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="bgrandom.js"></script>
  <meta charset="utf-8">
</head>
<body onload="randombg()" id="body">
	<div class="container">

			<main>
					<article>
							<form method="post" action="rzuty.php">
									<label>Login <input type="text" name="login"></label>
									<label>Hasło <input type="password" name="pass"></label>

									<input type="submit" value="Zaloguj się!">

									<?php
								 if (isset($_SESSION['bad_attempt'])) {
										 echo '<p>Niepoprawny login lub hasło! </p>';
											echo password_hash('qwerty123', PASSWORD_DEFAULT);
											unset($_SESSION['bad_attempt']);
									}
									?>


							</form>
					</article>
			</main>

	</div>
</body>
</html>
