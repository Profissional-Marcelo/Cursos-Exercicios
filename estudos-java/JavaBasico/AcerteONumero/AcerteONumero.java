package AcerteONumero;

import java.util.Scanner;

public class AcerteONumero {
   public static void main(String[] args) {

       

        int contador = 1;


    while (contador == 1) {
       
        double aleatorio = Math.random();

        int numero = (int) (0 + aleatorio * (5 - 0));
 
        System.out.println("Tente acertar o número entre 0 e 5");
 
        Scanner ss = new Scanner(System.in);
     
        int resposta = ss.nextInt();

        if (resposta == numero) {
            System.out.println("Acertou");
            contador++;
        } else {
         System.out.println("Errou, eu pensei no " + numero);
        }
 
    }
       
   } 
}
