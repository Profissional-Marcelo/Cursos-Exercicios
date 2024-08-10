package JavaPOO.MetodosEspeciais;

public class Caneta {
    public String modelo, cor;
    private float ponta;
    private boolean tampada;

    public Caneta(String m, String c, float p) { //Este é o método construtor
        this.modelo = m;
        this.cor = c;
        this.ponta = p;
    }

    

    public String getModelo(){
        return this.modelo;
    }

    public void setModelo(String m){
        this.modelo = m;
    }

    public float getPonta() {
        return this.ponta;
    }

    public void setPonta(float p){
        this.ponta = p;
    }

    public void tampar(){
        this.tampada = true;
    }

    public void destampar(){
        this.tampada = false;
    }
    public void status(){
        System.out.println("SOBRE A CANETA");
        System.out.println("MODELO: " + this.modelo);
        System.out.println("PONTA: " + this.ponta);
        System.out.println("TAMPA: " + this.tampada);
        System.out.println("COR: " + this.cor);
    }
    
}