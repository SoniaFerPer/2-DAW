
while(true){
let nota =ParseFloat(prompt("Di una nota: "));
    if(nota < 0 || nota > 10){
        break;
    }

    if(nota < 5){
        console.log("Insuficiente.");
    }else if(nota >= 5 && nota < 6){
        console.log("Suficiente.");
    }else if(nota > 6 && nota < 7){
        console.log("Bien.");
    }else if(nota > 7 && nota < 9){
        console.log("Notable.");
    }else if(nota >= 9){
        console.log("Sobresaliente.");
    }
};
