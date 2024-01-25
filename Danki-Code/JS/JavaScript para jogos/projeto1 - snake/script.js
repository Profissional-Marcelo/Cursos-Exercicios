

window.onload = function(){
    let canvas = document.getElementById('div');
    let ctx = canvas.getContext('2d');

    // Variaveis
    snake = [];
    positionX = 10;
    positionY = 10;
    foodX = 15;
    foodY = 15;
    velX = 0;
    velY = 0;
    grid = 20;
    tam = 3;

    // Chamada da função a cada 100 milisegundos
    setInterval(jogo, 100);

    // Controles
    document.addEventListener('keydown', function(e){
        function identificaTecla(event) {
 let key = event.key;
 document.getElementById("div").innerHTML = "A tecla pressionada foi: " + key;
}
        switch(e.key){
            case 37:
                velX = -1;
                velY = 0;
                break;
            case 38:
                velX = 0;
                velY = -1;
                break;
            case 39:
                velX = 1;
                velY = 0;
                break;
            case 40:
                velX = 0;
                velY = 1;
                break;
        }
    })
}

function jogo(){
    // Configuração da tela
    ctx.fillStyle = '#2980B9';
    // Parâmetros - distancia borda h, distancia borda v, largura, altura
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    // Posicionando a cobra
    snake.push({x: positionX, y: positionY});
    console.log(snake[0]);


    // Configuração da cobra
    ctx.fillStyle = "#00f102";
    for(let i=0; i<snake.length; i++){
        ctx.fillRect(snake[i].x*grid, snake[i].y*grid, grid-1, grid-1);
    }
    
}