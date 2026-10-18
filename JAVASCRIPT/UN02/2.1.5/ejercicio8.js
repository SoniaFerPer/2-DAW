let intentos = 3;
let acceso = false;
const CONTRASENA = DAW2026;

while (intentos > 0) {

    let password = prompt("Introduce la contraseña:");

    if (password === CONTRASENA) {
        console.log("Acceso concedido");
        acceso = true;
        break;
    } else {
        intentos--;
        console.log("Contraseña incorrecta. Te quedan " + intentos + " intentos.");
    }
}

if (acceso === false) {
    console.log("Cuenta bloqueada");
}