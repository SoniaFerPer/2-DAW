let hoy = new Date();
let dia = Number(prompt("dime el dia de tu cumple: "));

let mes = Number(prompt("Dime el mes: "));
let anio = Number(prompt("Dime el año: "));

let edad = hoy.getFullYear() - anio;
let mesHoy = hoy.getMonth() + 1;
if(mesHoy < mes || (mesHoy === mes && hoy.getDate() < dia)){
    edad--;
}
alert(`Tienes ${edad} años`);

