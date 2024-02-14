<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>

<body>

    <header>

        <section class="one">
            <h1>
                Organizer: SIERPIEŃ
            </h1>
        </section>

        <section class="two">
            <form action="organizer.php" method="post">
                <label>
                    Zapisz wydarzenie: <input type="text" name="input">
                </label>
                <button name="submit">OK</button>
            </form>
            <?php
                $con = mysqli_connect('localhost', 'root', '', 'kalendarz');

                if(isset($_POST['submit'])) {
                    $input = $_POST['input'];
                    $kw1 = "UPDATE zadania SET wpis ='$input' WHERE dataZadania = '2020-08-09';";
                    mysqli_query($con, $kw1);
                }
             ?>
        </section>

        <section class="three">
            <img src="./logo2.png" alt="sierpień">
        </section>

    </header>

    <main>
    <?php
    $kw2 = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'sierpien'";
    $res = mysqli_query($con, $kw2);
    while($tab = mysqli_fetch_array($res)) {
        echo "<section class='dzien'>
                <h5>$tab[0]</h5>
                <p>$tab[1]</p>
                </section>";
    }
    mysqli_close($con);
    ?>
    </main>

    <footer>
        <p>
            Stronę wykonał: 01234567897
        </p>
    </footer>

</body>

</html>