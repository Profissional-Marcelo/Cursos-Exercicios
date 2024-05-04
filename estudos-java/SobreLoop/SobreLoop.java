package SobreLoop;

public class SobreLoop {
    public static void main(String[] args) {
        // O comando continue faz retornar ao loop, independente de já ter terminado o código ou não, veja o exemplo abaixo
        // e o break é o contrário ele interrompe o fluxo, mesmo sem ter cumprido ele.  
        int cc = 0;
        while (cc < 10) {
            cc++;
            if ( cc == 5 || cc == 7 || cc == 9) {
                continue;
            }
            System.out.println("Cambalhota " + cc);

        }

    }
}
