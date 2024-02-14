let wywod = document.getElementById("wywod");

let check = document.getElementById("check");

let km = document.getElementById("km");



function f01() {
    if (check.checked) {
        wywod.innerHTML = 'Dowieziemy Twoją pizzę za darmo';
    }

    else {

        wywod.innerHTML = "Dowóz bedzie Cię kosztował " + km.value * 2 + " złotych";
    }

}