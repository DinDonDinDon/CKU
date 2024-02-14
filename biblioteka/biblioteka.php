<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h2>
            Miejska Biblioteka Publiczna
            w Książkowicach
        </h2>
    </header>

    <main>

        <section class="lewy">
            <h2>Dodaj czytelnika</h2>

            <form action="biblioteka.php" method="post">

                <label>imię:
                    <input type="text" name="imie"><br>
                </label>

                <label>nazwisko:
                    <input type="text" name="nazwisko"><br>
                </label>

                <label>
                    rok urodzenia:
                    <input type="number" name="rok"><br>
                </label>
                <button>DODAJ</button>
            </form>
            <?php
                $con = mysqli_connect('localhost', 'root', '', 'biblioteka');

                if(!empty($_POST['imie']) && !empty($_POST['nazwisko'] && !empty($_POST['rok']))) {
                    $imie = $_POST['imie'];
                    $nazwisko = $_POST['nazwisko'];
                    $rok = $_POST['rok'];

                    $kod = $imie[0].$imie[1].$rok[-2].$rok[-1].$nazwisko[0].$nazwisko[1];
                    $kod = strtolower($kod);

                    $kw1 = "INSERT INTO czytelnicy VALUES (NULL, '$imie', '$nazwisko', '$rok');";

                    mysqli_query($con, $kw1);

                    echo "Czytelnik:$imie $nazwisko został dodany do bazy danych";
                }



            ?>
        </section>

        <section class="centr">
            <img src="./biblioteka.png" alt="biblioteka">

            <h4>ul. Czytelnicza 25 <br>
                12-120 Książkowice <br>
                tel.: 123123123 <br>
                e-mail: <a href="biuro@bib.pl"> biuro@bib.pl</a>
            </h4>
        </section>

        <section class="prawy">
            <h3>Nasi czytelnicy:</h3>

            <ul>
                <?php
                $kw2 = "SELECT imie, nazwisko FROM czytelnicy;";

                $res2 = mysqli_query($con, $kw2);

                while($tab = mysqli_fetch_row($res2)) {
                    echo "<li>$tab[0] $tab[1]</li>";
                }

                  mysqli_close($con);
                ?>
            </ul>
        </section>

    </main>

    <footer>
        <p>
            Projekt witryny: 01234567899
        </p>
    </footer>

</body>

</html>