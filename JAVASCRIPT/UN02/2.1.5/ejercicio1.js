let num1 = Number(prompt("Di un numero: "));
let num2 = Number(prompt("Di otro numero: "));

let operacion = prompt("Di que operación quieres realizar (sumar,restar,multiplicar,dividir,resto): ");
let final = 0;

switch(operacion){
    case "sumar":
        final = num1 + num2;
        console.log(final);
        break;
    case "restar":
        final = num1 - num2;
        console.log(final);
        break;
    case "multiplicar":
        final = num1 * num2;
        console.log(final);
        break;
    case "dividir":
        final = num1 / num2;
        console.log(final);
        break;
    case "resto":
        final = num1 % num2;
        console.log(final);
        break;
    default:
        alert("error");
    break;

}

/* otro modo de imprimir:
if (
    ["sumar", "restar", "multiplicar", "dividir", "resto"]
        .includes(operacion)
) {
    alert("El resultado es: " + final);
}
*/