let contador1 = 0;
let contador2 = 0;
let contador3 = 0;
let contador4 = 0;
let contador5 = 0;
let contador6 = 0;
let dado = Math.floor(Math.random() * 6) + 1;

for(let i = 0 ; i < 100; i++){
    let dado = Math.floor(Math.random() * 6) + 1;
    if(dado === 1){
        contador1++;
    }else if(dado === 2){
        contador2++;
    }else if(dado === 3){
        contador3++;
    }else if(dado === 4){
        contador4++;
    }else if(dado === 5){
        contador5++;
    }else if(dado === 6){
        contador6++;
    }

}
alert(contador1 + contador2 + contador3 + contador4 + contador5 + contador6);

