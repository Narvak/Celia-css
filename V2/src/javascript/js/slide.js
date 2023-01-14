const slide = ["media/images/", "media/images/", "media/images/"];
let numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = slide[numero];
}
setInterval("ChangeSlide(1)", 9000);

console.log(slide)
console.log(numero)
console.log(ChangeSlide)