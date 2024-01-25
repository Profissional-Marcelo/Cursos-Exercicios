let total = 0;
let j = 1

while(j <= 10){
    total = total + 1
    console.log("Iteracao",total)
    j++;
}

let vidas = 100;
let colidindo = true;

while(colidindo){
    vidas -= 1;
    console.log(vidas);
    if(vidas == 0){
        break;
    }
}