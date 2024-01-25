let player = {
    saude: 100,
    felicidade: 50,
    play: function(){
        this.felicidade += 30;
    },
    eat: function(comida){
        if (comida == 'laranja'){
            this.saude += 100;
        }
        if (comida == 'uva'){
            this.saude += 50;
        }
    }
}