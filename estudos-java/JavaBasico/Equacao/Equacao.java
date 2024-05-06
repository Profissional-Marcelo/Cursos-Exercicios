package Equacao;

import java.util.Scanner;

public class Equacao {

    public static void main(String[] args) {    
        int a=0, b=0, c=0;

        Scanner ss = new Scanner(System.in);

        System.out.println("Digite o valor de A: ");
        a = ss.nextInt();
        System.out.println("Digite o valor de B: ");
        b = ss.nextInt();
        System.out.println("Digite o valor de C: ");
        c = ss.nextInt();

        double delta = Math.pow(b, 2) - (4*a*c);

        System.out.println("Delta:" + delta);
        System.out.print("Tipo de raizes" + (delta >= 0 ? "Existem raízes reais" : "Não existem raízes Reais"));



    }
    
}
