<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="dni.css">
  <meta charset="utf-8">
</head>
<body>

<div class="container">

    <header>
        <h1>Karta</h1>
    </header>

    <main>
			<article id="grid">
				<section id="rekordow">Łącznie rekordów: <?php $dniQuery->rowCount()?></section>
					<section id="temat">
						<div>Data</div>
						<div>Kurnik</div>
						<div>Wylęgarnia</div>
						<div>Rasa</div>
						<div>Faktura</div>
						<div>Waga</div>
						<div>Pasza</div>
						<div>Padłe</div>
						<div>Selekcja</div>
						<div>Zużycie wody</div>
						<div>Temp min</div>
						<div>Temp max</div>
						<div>Wilg max</div>
						<div>Silos</div>
						</section>
					<section id="wartosc">
						<div><a href='user.php?id_dnia={$dzien['id']}'>dzień {$dzien ['data']}</a></div>
						<div>{$dzien ['kurnik']}</div>
						<div>{$dzien ['wylegarnia']}</div>
						<div>{$dzien ['rasa']}</div>
						<div>{$dzien ['faktura']}</div>
						<div>{$dzien ['waga']}</div>
						<div>{$dzien ['pasza']}</div>
						<div>{$dzien ['padle']}</div>
						<div>{$dzien ['selekcja']}</div>
						<div>{$dzien ['zuzycie_wody']}</div>
						<div>{$dzien ['temp_min']}</div>
						<div>{$dzien ['temp_max']}</div>
						<div>{$dzien ['max_wilg']}</div>
						<div>{$dzien ['silos']}</div>
					</section>
			</article>
			<article id="menu">
              <a href="user.php">Dodaj dzień!</a>
              <a href="logout_a.php">Wyloguj się!</a>
        </article>
    </main>
</body>
</html>
