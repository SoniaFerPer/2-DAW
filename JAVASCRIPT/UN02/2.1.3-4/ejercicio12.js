let frase = prompt("di una frase: ")
let i = 0;
let contadorAa = 0;
let contadorEe = 0;
let contadorIi = 0;
let contadorOo = 0;
let contadorUu = 0;
while(i < frase.length){
    switch (frase[i]) {
        case "a":
        case "A":
            contadorAa++;
            break;

        case "e":
        case "E":
            contadorEe++;
            break;

        case "i":
        case "I":
            contadorIi++;
            break;

        case "o":
        case "O":
            contadorOo++;
            break;

        case "u":
        case "U":
            contadorUu++;
            break;
    }

    i++;
}

alert(
    "A: " + contadorAa +
    "\nE: " + contadorEe +
    "\nI: " + contadorIi +
    "\nO: " + contadorOo +
    "\nU: " + contadorUu
);

//CON IF ANIDADOS

/* while(i < frase.length){
        if((frase[i] === "a") || (frase[i] === "A")){
            contadorAa ++;
        }else if((frase[i] === "e") || (frase[i] === "E")){
            contadorEe++;
        }else if((frase[i] === "i") || (frase[i] === "I")){
            contadorIi++;
        }else if((frase[i] === "o") || (frase[i] === "O")){
            contadorOo++;
        }else if((frase[i] === "u") || (frase[i] === "U")){
            contadorUu++;
        }
        i++;
    } */