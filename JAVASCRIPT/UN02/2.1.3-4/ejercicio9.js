let frase = prompt("Escribe una frase: ");
let contador = 0;
for(let i = 0; i<=frase.length; i++){
    if(frase[i] === "a"){
        contador++;
    }
}
alert(contador);