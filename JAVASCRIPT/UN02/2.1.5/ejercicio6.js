let num;

do {
    num = Number(prompt("Dime un número entero positivo: "));
} while (num <= 0);

let copia = num;
let cifras = 0;
let invertido = 0;

while (copia > 0) {
    let unidad = copia % 10;        // extrae la última cifra
    invertido = invertido * 10 + unidad; // la va colocando al revés
    copia = Math.floor(copia / 10); // quita esa cifra del número
    cifras++;
}

console.log(`El número tiene ${cifras} cifras.`);
console.log(`Escrito al revés es: ${invertido}`);

if (num === invertido) {
    console.log("Es capicúa.");
} else {
    console.log("No es capicúa.");
}