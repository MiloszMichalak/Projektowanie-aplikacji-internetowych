document.getElementById("policz").addEventListener("click", () => {
    let czekboksy = document.getElementsByName("twarz");
    let suma = 0;
    czekboksy.forEach(element => {
        if (element.checked){
            suma += parseInt(element.value);
        }
    });

    document.getElementById("cena").innerHTML = "Cena zabiegów: " + suma;
});