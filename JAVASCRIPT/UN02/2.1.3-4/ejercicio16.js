let num1 = prompt("Di un numero: ");
let num2 = prompt("Di un numero: ");

//siempre hay que inicializar las variables para luego meterles valores
let divisoresComunes = "";

//solo tiene que llegar hasta el 12 porque son los comunes de ambos por tanto 12 no puede tener 13 o 14 como podria tener 18 (no lo tiene pero por ejemplo)
for (let i = 1; i <= num1; i++) {
    if (num1 % i === 0 && num2 % i === 0) {
        divisoresComunes += i + " ";
    }

}

console.log(divisoresComunes);