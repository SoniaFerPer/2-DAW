// 1. Definimos el menú de opciones en un string multilínea
const menu = `
Seleccione una opción:
1. Celsius a Fahrenheit
2. Fahrenheit a Celsius
3. Cerrar sesión

Escriba el número de su opción:`;

do{
    let temp;
    let trans;
    // 2. Mostramos el prompt y guardamos la respuesta del usuario
    let opcion = Number(prompt(menu));

    switch(opcion){
        case 1:
            temp = Number(prompt("Di la temperatura: "));
            trans = (temp * 9 / 5) + 32 ;
            console.log(trans);
            break;
        case 2:
            temp = Number(prompt("Di la temperatura: "));
            trans = (temp - 32) * 5 / 9;
            console.log(trans);
            break;
        case 3:
            console.log("Sesión cerrada.");
            break;    
        default:
            console.log("Opción no viable.");  
            break;  
    }

}while(Option !== 3)