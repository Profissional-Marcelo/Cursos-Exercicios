let arrayvazio = [];

let estado = ['ganhou', 'andando', 'correndo', 'parado'];
let notas = [10, 20, 30, 40]
let bl = [true, true, false]


console.log("Array:", estado);
console.log("Tamanho:" + estado.length);
console.log("Primeiro elemento:" + estado[0]);
console.log("Ultimo elemento:" + estado[estado.length - 1]);

estado[estado.length-1] = 'andando';
console.log("Array:", estado[estado.length-1]);

estado.push('elemento novo');
console.log("Array:", estado);

estado.pop()
console.log(estado)
