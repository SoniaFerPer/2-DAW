let importe = Number(prompt("Introduce un importe entero en euros:"));

//math.floor calcula cuantos billetes de x caben en el importe, redondeando hacia abajo, guardamos ese importe 
let billetes50 = Math.floor(importe / 50);

//tambien valdria importe = importe % 50 ya que daria el resto de importe;
importe = importe - (billetes50 * 50);

let billetes20 = Math.floor(importe / 20);
importe = importe - (billetes20 * 20);

let billetes10 = Math.floor(importe / 10);
importe = importe - (billetes10 * 10);

let billetes5 = Math.floor(importe / 5);
importe = importe - (billetes5 * 5);

let monedas2 = Math.floor(importe / 2);
importe = importe - (monedas2 * 2);

let monedas1 = importe;

console.log(billetes50 + " x 50 €");
console.log(billetes20 + " x 20 €");
console.log(billetes10 + " x 10 €");
console.log(billetes5 + " x 5 €");
console.log(monedas2 + " x 2 €");
console.log(monedas1 + " x 1 €");



/*
OTRA MANERA CON ARRAY PARA MAS ADELANTE
let valores = [50, 20, 10, 5, 2, 1];
let nombres = [
    "Billetes de 50 €",
    "Billetes de 20 €",
    "Billetes de 10 €",
    "Billetes de 5 €",
    "Monedas de 2 €",
    "Monedas de 1 €"
];

for (let i = 0; i < valores.length; i++) {
    let cantidad = parseInt(importe / valores[i]);

    console.log(cantidad + " x " + nombres[i]);

    importe = importe - cantidad * valores[i];
}
*/