<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twoje BMI</title>
    <link rel="stylesheet" href="styl3.css">
</head>

<body>


    <section class="logo">
        <img src="./wzor.png" alt="wzór BMI">
    </section>

    <header>
        <h1>
            Oblicz swoje BMI
        </h1>
    </header>

    <main>
        <table>
            <tr>
                <th>Interpretacja BMI</th>
                <th>Wartość minimalna</th>
                <th>Wartość maksymalna</th>
            </tr>
            <?php
			$con = mysqli_connect('localhost', 'root', '', 'bmi');
			$kw1 = "SELECT informacja, wart_min, wart_max FROM bmi;";
			$res1 = mysqli_query($con, $kw1);
			while($tab = mysqli_fetch_array($res1)) {
				echo "<tr><td>$tab[0]</td><td>$tab[1]</td><td>$tab[2]</td></tr>";
			}
			?>
        </table>
    </main>

    <section class="lewy">
        <h2>
            Podaj wagę i wzrost
        </h2>
        <form action="bmi.php" method="post">
            <label>
                Waga:
                <input type="number" min="1" name="waga" value="1">
            </label><br>

            <label>
                Wzrost w cm:
                <input type="number" min="1" value="1" name="wzrost">
            </label><br>
            <button type="submit">Oblicz izapamiętaj wynik</button>
        </form>
        <?php
		if(!empty($_POST['waga']) && !empty($_POST['wzrost'])) {
			$waga = $_POST['waga'];
			$wzrost = $_POST['wzrost'];
			$bmi = $waga / ($wzrost * $wzrost) * 10000;
			echo "Twoja waga: $waga, Twój wzrost: $wzrost<br/>BMI wynosi: $bmi";
			if($bmi > 0 && $bmi < 19) $przedzial = 1;
			if($bmi > 19 && $bmi < 26) $przedzial = 2;
			if($bmi > 26 && $bmi < 31) $przedzial = 3;
			if($bmi > 31 && $bmi < 100) $przedzial = 4;
			$data = DATE('Y-m-d');
			$kw2 = "INSERT INTO wynik VALUES (NULL, $przedzial, '$data', $bmi);";
			mysqli_query($con, $kw2);
		}
		mysqli_close($con);
		?>
    </section>

    <section class="prawy">
        <img src="./rys1.png" alt="ćwiczenia">
    </section>

    <footer>
        <p>Autor: 01234567899
            <a href="./kwerendy.txt">Zobacz kwerendy</a>
        </p>
    </footer>

</body>

</html>