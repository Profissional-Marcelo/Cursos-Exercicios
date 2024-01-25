let notas = [40, 20, 50, 43, 56, 22, 34, 43, 44]

console.log("Notas antes da correcao: ", notas)

notas.forEach(function(entry,index,scores){
    notas[index] += 20;
})

console.log("Notas depois da correcao: ", notas)