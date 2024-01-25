let itens = 0
let colidindoitens = true;

while(colidindoitens){
    itens += 1;
    console.log(itens);
    if (itens >= 10){
        break;
    }
}

// continue

let castigo = true;
let colidiu = true;
let moedas = 0;
while(colidiu){
    if(castigo == true){
        continue;
    }
    moedas++;
    if(moedas == 10) {
        break;
    }
}

let numero = 0;
let soma = 0;

while(numero <= 9999){
    soma += numero;
    numero++;
    if (soma == 9999){
        break;
    }

}