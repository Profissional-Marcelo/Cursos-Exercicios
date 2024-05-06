package JavaPOO.Visibilidade;
public class Caneta {
    public String modelo;
    public String cor;
    private float ponta;
    protected int carga;
    protected boolean tampada;
    
    public void status(){
        System.out.println("Cor: " + this.cor);
        System.out.println("Modelo: " + this.modelo);
        System.out.println("Ponta: " + this.ponta);
        System.out.println("Carga: " + this.carga);
        System.out.println("Esta tampada? " + this.tampada);
    }

    protected void rabiscar(){
        if(tampada == false){
        System.out.println("Estou rabiscando");
    } else {
        System.out.println("Não posso rabiscar");
    }
    }
    protected void tampar(){
        tampada = true;
    }

    void destampar(){
        tampada = false;
    }   
}
