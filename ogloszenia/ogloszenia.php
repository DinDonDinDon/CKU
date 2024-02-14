<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal ogłoszeniowy</title>
    <link rel="stylesheet" href="styll.css">
</head>

<body>

    <header>
        <h1>
            Portal Ogłoszeniowy
        </h1>
    </header>

    <main>

        <section class="lewy">
            <h2>
                Kategorie ogłoszeń
            </h2>

            <ol>
                <li>Książki</li>
                <li>Muzyka</li>
                <li>Filmy</li>
            </ol>
            <img src="./ksiazki.jpg" alt="Kupię / sprzedam książkę">

            <table>
                <tr>
                    <td>Liczba ogłoszeń</td>
                    <td>Cena ogłoszenia</td>
                    <td>Bonus</td>
                </tr>
                <tr>
                    <td>1 - 10</td>
                    <td>1 PLN</td>
                    <td rowspan="3">Subskrypcja newslettera to upsut 0,20 PLN na ogloszenie</td>
                </tr>
                <tr>
                    <td>11 - 50</td>
                    <td>0,80 PLN</td>

                </tr>
                <tr>
                    <td>51 i więcej</td>
                    <td>0,60 PLN</td>

                </tr>
            </table>
        </section>

        <section class="prawy">
            <h2>
                Ogłoszenia kategorii książki
            </h2>
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'ogloszenia');

            $kw1 = "SELECT id, tytul, tresc FROM ogloszenie WHERE kategoria = '1';";

            $kw2 = "SELECT telefon FROM uzytkownik JOIN ogloszenie ON uzytkownik.id = ogloszenie.uzytkownik_id";

            $res1 = mysqli_query($con, $kw1);
            $res2 = mysqli_query($con, $kw2);

            while($tab1 = mysqli_fetch_row($res1)) {
                  $tab2 = mysqli_fetch_row($res2);

                echo "<h3>$tab1[0] $tab1[1]</h3>";
                echo "<p>$tab1[2]</p>";

                echo "<p>telefon kontaktowy:$tab2[0]</p>";

            }
            mysqli_close($con);

            ?>
        </section>
    </main>

    <footer>Portal ogłoszeniowy opracował: 91081814077</footer>

</body>

</html>