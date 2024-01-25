

// function htm(horas){
//     let resultado = horas * 60;
//     return resultado
// }

// let a = html(10);
// alert(a);

function estado(vel){
    if(vel == 0){
        alert("parado");
    } else if (vel > 0 && vel < 100){
        alert("andando");
    } else if (vel>100){
        alert("correndo");
    }
}

let dinheiro = 0;
let item = "";

function Compra(dinheiro, item){
    if (dinheiro >= 100 && item == "Espada"){
        console.log("Ganhou uma espada!");
        dinheiro -= 100;
    } else {
        console.log("Você não tem dinheiro");
    }
    
    if ( dinheiro >= 200 && item == "Escudo"){
        console.log("Ganhou um escudo!");
        dinheiro -= 200;
    } else {
        console.log("Você não tem dinheiro");
    }

    if (dinheiro >= 300 && item == "Adaga"){
        console.log("Ganhou uma adaga!");
        dinheiro -= 300;
    } else {
        console.log("Você não tem dinheiro");
    }

}