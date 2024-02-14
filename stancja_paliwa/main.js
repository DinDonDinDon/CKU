function f01() {
    let rod = +document.getElementById('rod').value;

    let ilosc = +document.getElementById('ilosc').value;

    let wynik = document.getElementById('wynik');

    if (rod == 1) {
        cena = 4;
    }

    else if (rod == 2) {
        cena = 3.5;
    }

    else {
        cena = 0
    }

    wynik.innerHTML = "koszt paliwa" + cena * ilosc + "zł";
}