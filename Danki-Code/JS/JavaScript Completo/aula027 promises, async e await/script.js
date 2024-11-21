// PROMISE
// function testes(){

  
//     return new Promise(function(resolve,reject){
        
// setTimeout(function(){
//     const erro = true;


    //         if(erro){
    //             reject('Erro...')
    //         } else{    
    //         resolve("A promisse foi resolvida com sucesso!")
    //         }const erro = true;


//         if(erro){
//             reject('Erro...')
//         } else{    
//         resolve("A promisse foi resolvida com sucesso!")
//         }
// },2000)

//         
//     })
// }

// testes().then(function(res){
//     alert(res);
// }).catch(function(err){
//     alert(err)
// }) 

//ASYNC É A FORMA MAIS ELEGANTE DE RETORNAR UMA PROMISE

async function testes2(){
    await testes().then(function(res){
        alert(res);
    });    
    alert('Olá');
}

testes2();