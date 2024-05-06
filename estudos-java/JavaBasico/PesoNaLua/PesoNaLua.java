package PesoNaLua;

import java.util.Scanner;

public class PesoNaLua {
    public static void main(String args[]){
        double peso;

        System.out.println("Digite seu peso");
        Scanner ss = new Scanner(System.in);
        peso = ss.nextDouble();
        double pesoLua = peso * 17 / 100;
        
        System.out.println("Seu peso na lua é " + pesoLua);
        
        




    }
}
