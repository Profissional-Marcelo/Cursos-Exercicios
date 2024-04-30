package Divisao;

import java.util.Scanner;

public class Divisao {
    public static void main(String[] args) {
        Scanner ss = new Scanner(System.in);

        int numerador, denominador;

        System.out.println("Digite o numerador");
        numerador = ss.nextInt();

        System.out.println("Digite o denominador");
        denominador = ss.nextInt();
        
        System.out.println("O valor do resto da divisão é: \n" + numerador%denominador + "\nO valor do resto da divisão é: \n" + numerador/denominador);


        
        

    }
    
}
