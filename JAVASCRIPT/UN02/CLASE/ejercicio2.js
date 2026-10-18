let producto;
let total = 0;
for(let i = 0; i < 3;i++){
    producto = prompt("dime tres productos: ");
    total += producto * 1.21;
}
alert(total);