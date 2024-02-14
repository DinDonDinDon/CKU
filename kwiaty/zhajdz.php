<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>

<body>

    <header>
        <h1>
            Grupa Polskich Kwiaciarni
        </h1>
    </header>

    <main>

        <section class="lewy">
            <h2>Menu</h2>

            <ol>
                <li><a href="index.html">Strona główna</a></li>
                <li><a href="kwiaty.pl" target="_blank">Rozpoznaj kwiaty</a></li>
                <li><a href="zhajdz.php">Znajdź kwiaciarnię</a>
                    <ul>
                        <li>w Warszawie</li>
                        <li>w Malborku</li>
                        <li>w Poznaniu
                        </li>
                    </ul>
                </li>
            </ol>
        </section>

        <section class="prawy">
            <h2>
                Znajdź kwiaciarnię
            </h2>

            <form action="znajdz.php" method="post">
                <label>
                    Podaj nazwę miasta:
                    <input type="text" name="in">
                </label>
                <button type="submit" name ="bt">SPRAWDŹ</button>
            </form>
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'kwiaciarnia');

           if (isset($_POST['bt'])) {
            $in = $_POST['in'];
            $kw1 = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = '$in';";
            $res = mysqli_query($con, $kw1);
            while($tab = mysqli_fetch_array($res)) {
                echo "<h3>$tab[0], $tab[1]</h3>";
            }
           }
           mysqli_close($con);
            ?>
        </section>
    </main>

    <footer>
        <p>Stronę opracował:1234567890</p>
    </footer>

</body>

</html>