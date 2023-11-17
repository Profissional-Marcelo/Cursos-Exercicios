
function carregar(){
    var msg = document.querySelector('div#msg')
    var img = document.getElementById('imagem')
    var data = new Date()
    var hora = data.getHours()
    var gerar = document.createElement('img')
    gerar.setAttribute('id', 'foto')


    msg.innerHTML = `Agora são ${hora} horas.`    
    if (hora >= 0 && hora < 12){
        document.body.style.background = "#e2cd9f"
        gerar.setAttribute('src', 'manha.jpg')
    } else if (hora >= 12 && hora < 19 ) {
        document.body.style.background = "#b9846f"
        gerar.setAttribute('src', 'tarde.jpg')
    } else {
        document.body.style.background = "#515154"
        gerar.setAttribute('src', 'night.jpg')
    }
    img.appendChild(gerar)

}



