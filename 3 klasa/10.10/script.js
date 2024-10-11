var zdjecia = [
    ['nazwa1.jpg', 'Miasto zima', 'Wyglada jak zima stulecia'],
    ['nazwa2.jpg', 'Polaczenie autostrad', 'Wydajne polaczenie na autostradzie'],
    ['nazwa3.jpg', 'Korek w miescie', 'Wyjatkowo nie wydalne polaczneie ulic'],
    ['nazwa4.jpg', 'Ruch na autostradzie', 'Ladnie naswietlone zdjecie pokazywane ruch samochodow na ']
];

zmien(1);

document.getElementById("lewo").addEventListener("click", () => {
    currentIndex = (currentIndex - 1) % zdjecia.length;
    if (currentIndex < 0){
        currentIndex = zdjecia.length - 1;
    }
    zmien(currentIndex);
});

document.getElementById("prawo").addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % zdjecia.length ;
    zmien(currentIndex);
});

var currentIndex = 0;

function zmien(id) {
    let divTytul = document.getElementById("tytul");
    let divOpis = document.getElementById("opis");
    let divZdjecie = document.getElementById("zdjecie");


    divZdjecie.innerHTML = '<img src="' + zdjecia[id][0] + '" />';
    divTytul.innerHTML = zdjecia[id][1];
    divOpis.innerHTML = '<br />' + zdjecia[id][2];
}