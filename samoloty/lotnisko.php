<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port Lotniczy</title>
    <link rel="stylesheet" href="styl5.css">
</head>

<body>

    <header>

        <section class="one">
            <img src="./zad5.png" alt="logo lotnisko">
        </section>

        <section class="two">
            <h1>
                Przyloty
            </h1>
        </section>

        <section class="three">
            <h3>
                przydatne linki
            </h3>
            <a href="./kwerendy.txt" target="_blank">Pobierz</a>
        </section>
    </header>

    <main>
        <table>
            <tr>
                <th>CZAS</th>
                <th>KIERUNEK</th>
                <th>NUMER REJSU</th>
                <th>STATUS</th>
            </tr>
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'egzamin');
            $kw1 = "SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas ASC;";
            $res = mysqli_query($con, $kw1);
            while($tab = mysqli_fetch_array($res)) {
                echo "<tr><td>$tab[0]</td><td>$tab[1]</td><td>$tab[2]<td>$tab[3]</td></tr>";
            }
            mysqli_close($con);
            ?>
        </table>
    </main>

    <footer>

        <section class="fone">
            <?php
            if(isset($_COOKIE['ciastko'])) {
                echo "<p><i>Witaj ponownie na stronie lotniska</i></p>";
            }
            else {
                setcookie("ciastko", 1, time() + 7200);
                echo "<p><b>Dzień dobry! Strona lotniska używa ciasteczek</b></p>";
            }
            ?>
        </section>

        <section class="ftwo">Autor: 01234567899</section>
    </footer>

</body>

</html>