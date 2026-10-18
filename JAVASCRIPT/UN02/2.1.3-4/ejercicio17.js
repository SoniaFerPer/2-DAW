let num = prompt(" Di un numero: ");

//un numero primo solo puede dividirse por su mismo y por 1, si tiene mas divisiones no es primo,m por tanto si el contador solo llega hasta 2 es primo
let contador = 0;

for (let i = 1; i <= num; i++) {
    if (num % i === 0) {
        contador++;
    }
}

if (contador === 2) {
    alert("Es primo");
} else {
    alert("No es primo");
}