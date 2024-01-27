var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");

//  Carregando imagens

var bird = new Image();
bird.src = "images/bird.png";
var bg = new Image();
bg.src = "images/bg.png";
var chao = new Image();
chao.src = "images/chao.png";
var canocima = new Image();
canocima.src = "images/canocima.png";
var canobaixo = new Image();
canobaixo.src = "images/canobaixo.png";

// Variaveis
let eec = 100;
var constant;
var bx = 33;
var by = 200;
var gravity = 1.4;  
var score = 0;
var cano = [];

cano[0] = {
    x : canvas.clientWidth,
    y : 0
}

//  Carregando sons
var fly = new Audio();
fly.src = "sounds/fly.mp3";
var scoreaudio = new Audio();
scoreaudio.src = "sounds/score.mp3";

// Captura de tecla 
document.addEventListener("keydown", voa)
    function voa(){
        by -= 26
        fly.play();
    }


function jogo(){
    // Fundo do jogo
    ctx.drawImage(bg, 0, 0);
    // drawimage (imagem, x, y)

    // Criando canos
    for(let i = 0; i < cano.length; i++){
        // Posição do cano de baixo
        constant = canocima.height + eec;
        // Configurando o cnao de cima
        ctx.drawImage(canocima,[cano[i].x,canocima[i].y]);
        ctx.drawImage(canoxbaixo, cano)
    }

    // desenhando o chão
    ctx.drawImage(chao, 0, canvas.height - chao.height);


    // passaro
    ctx.drawImage(bird, bx, by);
    by += gravity;
    requestAnimationFrame(jogo);
}

jogo();