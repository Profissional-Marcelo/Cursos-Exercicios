package JavaPOO.Escrever;

public class Escrever {
    public static void main(String[] args) {
        
        Caneta c1 = new Caneta();
        c1.cor = "Azul";
        c1.ponta = 0.5f;
        c1.tampar();
        c1.destampar();
        c1.rabiscar();

    }
    
}
