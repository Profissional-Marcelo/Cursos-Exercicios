package NumeroAleatorio;

public class NumeroAleatorio {
    public static void main(String[] args) {
         double aleatorio = Math.random();
        // System.out.println(aleatorio);
        // Número que pode vir quebrado

        int n = (int) (0 + aleatorio * (100 - 0));
        System.out.println(n);
    }
    
}
