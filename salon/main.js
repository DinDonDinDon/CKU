

function f01() {

    let p = document.getElementById("peling").checked;
    let m = document.getElementById("maska").checked;
    let ma = document.getElementById("masaz").checked;
    let maj = document.getElementById("makijaz").checked;
    let wywod = document.getElementById("wywod");
    let cena = 0;
    if (p) cena += 45;
    if (m) cena += 30;
    if (ma) cena += 20;
    if (maj) cena += 50;
    wywod.innerHTML = "Cena za uslugi" + cena + "zl";


}