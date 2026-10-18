let altura = Number(prompt("Introduce la altura del triángulo:"));

for (let i = 1; i <= altura; i++) {
    console.log("*".repeat(i));
}

for (let i = 1; i <= altura; i++) {

    let espacios = " ".repeat(altura - i);
    let asteriscos = "*".repeat(2 * i - 1);

    console.log(espacios + asteriscos);
}