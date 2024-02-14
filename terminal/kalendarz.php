<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>

<body>

    <header>

        <section class="lewy">
            <img src="./logo1.png" alt="lipiec">
        </section>

        <section class="prawy">
            <h1>
                TERMINARZ
            </h1>
            <p>najbliższe zadania:</p>
            
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'terminarz');
            $kw1 = "SELECT DISTINCT wpis FROM zadania WHERE dataZadania BETWEEN '2020-07-01' AND '2020-07-07' AND wpis !='';";
            $res = mysqli_query($con, $kw1);
            while($tab = mysqli_fetch_array($res)){
                echo "$tab[0]";
            }
            ?>
        </section>
    </header>

    <main>
        <?php
        $kw2 = "SELECT dataZadania, wpis FROM zadania
WHERE MONTH (dataZadania) = '7';";

$res2 = mysqli_query($con, $kw2);

while($tab = mysqli_fetch_array($res2)){
    echo "<section class='kalendarz'>
    <h6>$tab[0]</h6>
    <p>$tab[1]</p>
    
    
    </section>";
}

?>
    </main>

    <footer>
        <a href="sierpien.html">Terminarz na sierpień</a>
        <p>Stronę wykonał: 012345678975</p>
    </footer>

</body>

</html>