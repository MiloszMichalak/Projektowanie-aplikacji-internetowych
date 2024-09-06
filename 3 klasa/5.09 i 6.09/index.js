let zmianaBtn = document.getElementById("zmiana");
let koloSrodek = document.getElementById("koloSrodek");
let obrot = document.getElementById("obrot");

zmianaBtn.addEventListener("click", klik => {
    let kolorValue = document.getElementById("kolor").value;
    let rozmiarValue = document.getElementById("rozmiar").value;
    let obrotValue = document.getElementById("obrotValue").value;
    koloSrodek.style.fill = kolorValue;
    koloSrodek.setAttribute("r", rozmiarValue);
    obrot.style.rotate = obrotValue;

});
