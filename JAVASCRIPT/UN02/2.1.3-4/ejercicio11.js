let frase = prompt("di una frase: ")
let i = 0;
let contador = 0;
while(i <= frase.length){
    //tiene quer un o porque no pueden darse todas a la vez con un &&
    if((frase[i] === "a") || (frase[i] === "A") || (frase[i] === "e") || (frase[i] === "E") || (frase[i] === "i") || (frase[i] === "I") || (frase[i] === "o") || (frase[i] === "O") || (frase[i] === "u") || (frase[i] === "U")){
        //a las vocales tienes que sumarte el valor del indice de frase
        contador++;
    }
 i++;
}
alert(contador);