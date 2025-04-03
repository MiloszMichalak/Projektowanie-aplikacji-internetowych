document.getElementById("apply").addEventListener("click", () => {
    let img = document.getElementById("pszczola");
     document.getElementsByName("effect").forEach(element => {
        if (element.checked){
            if (element.value == "blur"){
                img.style.filter = "blur(5px)";
            }
            else if (element.value == "sepia"){
                img.style.filter = "sepia(100%)";
            } 
            else if (element.value == "invert"){
                img.style.filter = "invert(100%)";
            }
        }
    });
});

let pomaranczaImg = document.getElementById("pomarancza");
document.getElementById("kolory").addEventListener("click", () => {
    pomaranczaImg.style.filter = "grayscale(0%)";
});

document.getElementById("czarnoBialy").addEventListener("click", () => {
    pomaranczaImg.style.filter = "grayscale(100%)";
});

document.getElementById("zastosuj3").addEventListener("click", () => {
    let valueSlider = document.getElementById("slider").value;
    document.getElementById("owoce").style.filter = "opacity(" + valueSlider + "%)";
});

document.getElementById("zastosuj4").addEventListener("click", () => {
    let zolwimg = document.getElementById("zolwimg");
    let valueslider = document.getElementById("slider2").value;
    zolwimg.style.filter = "brightness(" + valueslider + "%)";
});
    
