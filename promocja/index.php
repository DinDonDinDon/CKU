<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep papierniczy</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>

    <header>
        <h1>
            W naszym sklepie internetowym kupisz
            najtaniej
        </h1>
    </header>

    <main>

        <section class="lewy">
            <h3>
                Promocja 15% obejmuje artykuły:
            </h3>

            <ul>
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'shop');
                $kw1 = "SELECT nazwa FROM towary WHERE promocja = '1';";

                $res = mysqli_query($con, $kw1);

                while($tab = mysqli_fetch_row($res)) {
                    echo "<li>$tab[0]</li>";
                }
                ?>
            </ul>
        </section>

        <section class="centr">
            <h3>
                Cena wybranego artykułu w promocji
            </h3>

            <form action="index.php" method="post">
                <select name="lista" id="lista">
                    <option value="Gumka do mazania">Gumka do mazania</option>
                    <option value="Cienkopis">Cienkopis</option>
                    <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
                    <option value="Markery 4 szt.">Markery 4 szt.</option>
                </select>
                <button type="submit">WYBIERZ</button>
            </form>
            <?php

            if(!empty($_POST['lista'])) {
                $produkty = $_POST['lista'];

                $kw2 = "SELECT cena FROM towary WHERE nazwa = '$produkty';";
                $res = mysqli_query($con, $kw2);
                  while($tab = mysqli_fetch_row($res)) {
                      $cena = round($tab[0]*0.85, 2);
                      echo "$cena";
                }


            }
            mysqli_close($con);
            ?>
        </section>

        <section class="prawy">
            <h3>
                Kontakt:
            </h3>
            <p>
                telefon: 123123123 <br>
                <a href="mailto:bok@sklep.pl">bok@sklep.pl</a>
            </p>
            <img src="./promocja2.png" alt="promocja">
        </section>

    </main>

    <footer>
        <h4>
            Autor strony: 01234567899
        </h4>
    </footer>

</body>

</html>