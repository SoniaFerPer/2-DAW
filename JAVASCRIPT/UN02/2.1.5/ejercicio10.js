let frase = prompt("Introduce una frase: ");

frase = frase.trim();

let palabras = frase.split(" ");
let contador = 0;

for (let i = 0; i < palabras.length; i++) {
    if (palabras[i] !== "") {
        contador++;
    }
}

console.log("La frase tiene " + contador + " palabras.");