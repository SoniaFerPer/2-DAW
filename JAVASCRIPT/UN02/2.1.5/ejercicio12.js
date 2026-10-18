//Numero perfecto: todos los numeros por los que es divisble menos el mismo sumados y que de el numero
let num = Number(prompt("Introduce un número:"));

for (let numero = 1; numero <= num; numero++) {

    let suma = 0;

    for (let divisor = 1; divisor < numero; divisor++) {  //no es <= porque no debemos incluir el propio numero

        if (numero % divisor === 0) {
            suma += divisor;
        }
    }

    if (suma === numero) {
        console.log(numero);
    }
}