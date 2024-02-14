function f01() {

    let inp = document.querySelector('.inp').value;


    let wywod = document.querySelector('.wynik');

    wywod.innerHTML = "Liczba potrzebnych puszek: " + Math.abs(Math.ceil(inp / 4));
}