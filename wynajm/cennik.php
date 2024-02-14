<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>

<body>

    <header>
        <h1>
            Pensjonat pod dobrym humorem
        </h1>
    </header>

    <main>

        <section class="lewy">
            <a href="index.html">GŁÓWNA</a>
            <img src="./1.jpg" alt="pokoje">
        </section>

        <section class="center">
            <a href="cennik.php">CENNIK</a>
            <table>
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'wynajem');
                $kw1 = "SELECT * FROM pokoje;";

                 $res = mysqli_query($con, $kw1);

                 while($tab = mysqli_fetch_array($res)) {
                    echo "<tr>
                                <td>$tab[0]</td>
                                <td>$tab[1]</td>
                                <td>$tab[2]</td>
                    
                    </tr>";
                 }
                 mysqli_close($con);
                ?>
            </table>
        </section>

        <section class="prawy">
            <a href="kalkulator.html">KALKULATOR</a>
            <img src="./3.jpg" alt="pokoje">
        </section>
    </main>

    <footer>
        <p>
            Stronę opracował: 01234567897
        </p>
    </footer>

</body>

</html>