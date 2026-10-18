let num1 = prompt("di un numero: ");
let num2 = prompt("di otro numero: ");
let num3 = prompt("di un último numero: ");
if((num1 > num2) && (num1 > num3)){
    document.write(`${num1} es mayor`);
} else if(num2 > num3) {
    document.write(`${num2} es mayor`);
}else{
    document.write(`${num3} es mayor`);
}
//quizas deberia añadir otro condicional por si son iguales 