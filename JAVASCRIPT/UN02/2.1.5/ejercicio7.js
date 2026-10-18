
let num = Number(prompt("Di un numero: "));

if(num >=0){
let factorial = 1;

    for (let i = 1; i <= n; i++) {
        factorial *= i;
    }

    console.log(`${n}! = ${factorial}`);
}else{
    console.log("Error: debes introducir un número entero mayor o igual que 0.");
}
