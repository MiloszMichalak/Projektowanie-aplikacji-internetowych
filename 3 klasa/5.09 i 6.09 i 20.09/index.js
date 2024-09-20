let zmianaBtn = document.getElementById("zmiana");
let koloSrodek = document.getElementById("koloSrodek");

zmianaBtn.addEventListener("click", () => {
    let kolorValue = document.getElementById("kolor").value;
    let rozmiarValue = document.getElementById("rozmiar").value;
    koloSrodek.style.fill = kolorValue;
    koloSrodek.setAttribute("r", rozmiarValue);
});
