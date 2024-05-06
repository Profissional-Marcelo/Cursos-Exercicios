package JavaPOO.Escrever;
public class Caneta {
    String modelo;
    String cor;
    float ponta;
    int carga;
    boolean tampada;
    
    void status(){
        System.out.println("Cor: " + this.cor);
        System.out.println("Modelo: " + this.modelo);
        System.out.println("Ponta: " + this.ponta);
        System.out.println("Carga: " + this.carga);
        System.out.println("Esta tampada? " + this.tampada);
    }

    void rabiscar(){
        if(tampada == false){
        System.out.println("Estou rabiscando");
    } else {
        System.out.println("Não posso rabiscar");
    }
    }
    void tampar(){
        tampada = true;
    }

    void destampar(){
        tampada = false;
    }   
}
