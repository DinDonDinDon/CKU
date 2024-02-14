<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel administratora</title>
    <link rel="stylesheet" href="styl4.css">
</head>

<body>

    <header>
        <h3>
            Portal Społecznościowy - panel
            administratora
        </h3>
    </header>

    <main>

        <section class="lewy">
            <h4>
                Użytkownicy
            </h4>
            <?php
		$con = mysqli_connect('localhost', 'root', '', 'dane4');
		$kw1 = "SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby LIMIT 30;";
		$res1 = mysqli_query($con, $kw1);
		while($tab = mysqli_fetch_row($res1)) {
			 $wiek = DATE("Y") - $tab[3];
			echo "$tab[0]. $tab[1] $tab[2], $wiek lat<br>";
		}
		?>

            <a href="settings.html">Inne ustawienia</a>
        </section>

        <section class="prawy">
            <h4>
                Podaj id użytkownika
            </h4>
            <form action="users.php" method="post">
                <input type="number" name="inp">
                <button type="submit">ZOBACZ</button>
            </form>
            <hr>
            <?php
            if(!empty($_POST['inp'])) {
                $inp = $_POST['inp'];
                $kw2 = "SELECT osoby.imie, osoby.nazwisko, osoby.rok_urodzenia, osoby.opis, osoby.zdjecie, hobby.nazwa FROM osoby
                JOIN hobby ON osoby.Hobby_id = hobby.id
                WHERE osoby.id = $inp;";
                $res2 = mysqli_query($con, $kw2);
                while($tab = mysqli_fetch_row($res2)) {
                    echo "<h2>$inp. $tab[0] $tab[1]</h2>
                    <img src='$tab[4]' alt='$inp'/>
                    <p>Rok urodzenia $tab[2]</p>
                    <p>Opis: $tab[3]</p>
                    <p>Hobby: $tab[5]</p>";
                }
            }
            mysqli_close($con);
            ?>
        </section>
    </main>

    <footer>
        Stronę wykonał: 01234567897
    </footer>

</body>

</html>