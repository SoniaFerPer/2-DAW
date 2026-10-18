let num;
let lista = [];

do{
    num = prompt("di un numero (vacío o Cancelar para terminar): ");
    
    if(isNaN(num)){ //comprobar si es un numero
        alert("No es un número.");
    }else{
        
        lista.push(Number(num));
    }

}while(num !== null || num !== "");

if (lista.length === 0) {
    console.log("No se ha introducido ningún número.");
} else {
    let suma = 0;
    for (let i = 0; i < lista.length; i++) {
    suma += lista[i];
    }
    let media = suma / lista.length;

    
    /*
    for (let i = 1; i < lista.length; i++) {
        if (lista[i] > mayor) {
            mayor = lista[i];
        }
        if (lista[i] < menor) {
            menor = lista[i];
        }
    }
    */
    //ESTO SUSTITUYE AL FOR
    let mayor = Math.max(...lista);
    let menor = Math.min(...lista);

    console.log(`Cantidad de números: ${lista.length}`);
    console.log(`Suma: ${suma}`);
    console.log(`Media: ${media}`);
    console.log(`Mayor: ${mayor}`);
    console.log(`Menor: ${menor}`);
}