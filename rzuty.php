<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="bgrandom.js"></script>
  <meta charset="utf-8">
</head>
<body onload="randombg()" id="body">
    <main>
      <article>

            <table>
                <thead>
                    <tr><th colspan="4">Łącznie rekordów: <?= $rzutyQuery->rowCount()?></th></tr>
                    <tr><th>data</th><th>rasa</th><th>ilość</th><th>wylęgarnia</th></tr>
                </thead>
                <tbody>
                    <?php
                     foreach ($rzuty as $rzut) {
                         // echo    "<form action='dane.php'>  <input type='hidden' name='id' value=2>
                          //echo '<form method='post' action='dane.php'><input type='hidden' name='id' value='{$rzut ['id']}'><input type='submit' value='Sprawdz'>'
                          // <input type='submit' value='Submit'>"
                          //$test++{$rzut ['id']} = $rzut ['id'];

                          //echo $test($rzut ['id']);

                          //echo "<form method='post' action='test.php'><input type='hidden' name='id' value='{$rzut ['id']}'><input type='submit' value='Sprawdz'>";
                          echo
                          "

                          <tr>
                          <td><a href='dni.php?id={$rzut['id']}'>rzut {$rzut ['data']}</a></td>
                          <td>{$rzut ['rasa']}</td>
                          <td>{$rzut ['ilosc']}</td>
                          <td>{$rzut ['wylegarnia']}</td>

                              </tr>

                          ";
                      }
                      ?>
                </tbody>
            </table>
            <p><a href="logout_a.php">Wyloguj się!</a></p>
      </article>
  </main>
</body>
</html>
