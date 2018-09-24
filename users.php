<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="users.css">
	<script type="text/javascript" src="bgrandom.js"></script>
  <meta charset="utf-8">
</head>
<body onload="randombg()" id="body">

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
		<article id="menu">
						<a href="user.php">Dodaj dzień!</a>
						<a href="logout_a.php">Wyloguj się!</a>
			</article>
                        <?php
                       if(isset($input['kurnik'])){
                       echo "
                          <form method='post' action='dane.php' id='f2'>
                                <input type='text' id='datepicker' name='data' value= {$input ['data']}>
                                <input type='text' name='kurnik' value= {$input ['kurnik']}>
                                <input type='text' name='wylegarnia' value= {$input ['wylegarnia']}>
                                <input type='text' name='rasa' value= {$input ['rasa']}>
                                <input type='text' name='waga' value= {$input ['waga']}>
                                <input type='text' name='pasza' value= {$input ['pasza']}>
                                <input type='text' name='padle' value= {$input ['padle']}>
                                <input type='text' name='selekcja' value= {$input ['selekcja']}>
                                <input type='text' name='zuzycie_wody' value= {$input ['zuzycie_wody']}>
                                <input type='text' name='temp_min' value= {$input ['temp_min']}>
                                <input type='text' name='temp_max' value= {$input ['temp_max']}>
                                <input type='text' name='max_wilg' value= {$input ['max_wilg']}>
                                <input type='text' name='silos' value= {$input ['silos']}>
                                <input type='text' name='faktura' value= {$input ['faktura']}>
                                 <input type='submit' value='Zapisz dane'>
                            </form>
                            ";} else {
                                echo "
                                <form method='post' action='dane.php' id='f2'>
                                     <input type=text id='datepicker' name='data'>
                                     <input type='text' name='kurnik'>
                                     <input type='text' name='wylegarnia'>
                                     <input type='text' name='rasa'>
                                     <input type='text' name='waga'>
                                     <input type='text' name='pasza'>
                                     <input type='text' name='padle'>
                                     <input type='text' name='selekcja'>
                                     <input type='text' name='zuzycie_wody'>
                                     <input type='text' name='temp_min'>
                                     <input type='text' name='temp_max'>
                                    <input type='text' name='max_wilg'>
                                     <input type='text' name='silos'>
                                     <input type='text' name='faktura'>
                                    <input type='submit' value='Zapisz dane'>
                                 </form>
                                 ";
                            }
                            ?>
										</article>
<!-- <input type='text' name='rasa' value= {$input ["temp_min"]}> -->
    </main>

</body>
