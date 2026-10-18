let nc = prompt("dime el nombre y los apellidos: ").trim();
let espacio = nc.indexOf(" ");
let ini = nc[0] + "." + nc[espacio + 1] + ".";
alert(ini.toUpperCase());

