function verificar(){
    var data = new Date()
    var ano = data.getFullYear() //Diz o ano atual
    var fano = document.getElementById('txtano')
    var res = document.getElementById('res')

    if (fano.value.length == 0 || Number(fano.value) > ano){
        window.alert('[ERRO] Verifique os dados e tente novamente' )
    } else {
        var fsex = document.getElementsByName('radsex')
        var idade = ano - Number(fano.value)
        var gen = ''
        var img = document.createElement('img')
        img.setAttribute('id', 'foto')

        if (fsex[0].checked) {
            gen = 'Homem'
            if(idade >= 0 && idade < 10){
                img.setAttribute('src', 'menino.jpg')
            }else if (idade && idade < 21){
                img.setAttribute('src', 'jovemHomem.jpg')
            } else if (idade < 50) {
                img.setAttribute('src', 'adulto.jpg')
            } else {
                img.setAttribute('src', 'idosoHomem.jpg')
            }
        } else if (fsex[1].checked) {
            gen = 'Mulher'
            if(idade >= 0 && idade < 10){
                img.setAttribute('src', 'menina.jpg')
            }else if (idade && idade < 21){
                img.setAttribute('src', 'jovemMulher.jpg')
            } else if (idade < 50) {
                img.setAttribute('src', 'adulta.jpg')
            } else {
                img.setAttribute('src', 'idosoMulher.jpg')
            }
        }
        res.style.textAlign = 'center'
        res.innerHTML = `Detectamos ${gen} com ${idade} anos.`
        res.appendChild(img)
    }
}