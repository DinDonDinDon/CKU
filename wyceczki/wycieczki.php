<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="styl4.css">
</head>

<body>

    <header>
        <h1>
            BIURO TURYSTYCZNE
        </h1>
    </header>

    <section class="dany">
        <h3>Wycieczki, na które są wolne miejsca</h3>
        <ul>
            <?php

            $con = mysqli_connect('localhost', 'root', '', 'biuro');
            $kw1 = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = '1';";
            $res = mysqli_query($con, $kw1);
            while($tab = mysqli_fetch_array($res)) {
                echo "<li>$tab[0].dnia$tab[1] jedziemy do $tab[2], cena:$tab[3]</li>";
            }
            ?>
        </ul>
    </section>

    <main>

        <section class="lewy">
            <h2>
                Bestselery
            </h2>
            <table>
                <tr>
                    <td>Wenecja </td>
                    <td>kwiecień</td>
                </tr>
                <tr>
                    <td>Londyn</td>
                    <td>lipiec</td>
                </tr>
                <tr>
                    <td>Rzym</td>
                    <td>wrzesień</td>
                </tr>
            </table>
        </section>

        <section class="centr">
            <h2>
                Nasze zdjęcia
            </h2>
            <?php

            $kw2 = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC;";

            $res = mysqli_query($con, $kw2);
            while($row = mysqli_fetch_array($res)){
                echo "<img src='$row[0]' alt='$row[1]'/>";
            }
            mysqli_close($con);
            ?>
        </section>

        <section class="prawy">
            <h2>Skontaktuj się</h2>
            <a href="mailto:turysta@wycieczki.pl ">napisz do nas</a>
            <p>telefon: 111222333</p>
        </section>
    </main>


    <footer>
        <p>Stronę wykonał: 01234567897</p>
    </footer>

</body>

</html>