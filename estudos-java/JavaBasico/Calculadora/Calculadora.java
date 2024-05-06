package Calculadora;

import java.util.Scanner;

public class Calculadora {
    public static void main(String[] args) {

        Scanner ss = new Scanner(System.in);
        

        System.out.println("Digite o número");
        double numero = ss.nextInt();

        double raiz = Math.sqrt(numero);
        double resto = numero % 2;
        double numeroCubo = Math.pow(numero, 3);
        double raizCubica = Math.cbrt(numero);
        double absoluto = Math.abs(numero);

        System.out.println("Resto da Divisão por 2: " + resto);
        System.out.println("Elevado ao Cubo " + numeroCubo);
        System.out.println("Raiz Quadrada " + raiz);
        System.out.println("Raiz Cubica " + raizCubica);
        System.out.println("Valor absoluto " + absoluto);
    }
    
    
}
