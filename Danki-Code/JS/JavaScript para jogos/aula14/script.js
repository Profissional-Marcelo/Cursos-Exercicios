cm = [[0,0,0,0],[1,0,0,0],[0,1,0,0],[1,1,1,1]]

let jogada1 = cm[0][0];
let jogada2 = cm[1][0];
let jogada3 = cm[0][1];

jogadas = []
jogadas.push(jogada1)
jogadas.push(jogada2)
jogadas.push(jogada3)

console.log(jogadas)

for(let i=0;i<jogadas.length;i++){
    if(jogadas[i] == 1){
        alert("Encontrou uma bomba!")
    } else if(i == jogadas.length -1){
        alert("Você venceu")
    }

}
    
