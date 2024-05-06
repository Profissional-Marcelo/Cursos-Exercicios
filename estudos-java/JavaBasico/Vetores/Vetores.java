package Vetores;

import java.util.Arrays;

public class Vetores {
    public static void main(String[] args) {
        // int n[] = new int[4];
        
        // n[0] = 3;
        // n[1] = 5;
        // n[2] = 8;
        // n[3] = 9;

        // int n[] = {3, 5, 8, 2};

        // int[] n = {3,2,8,7,5,4};


        // System.out.println("Total de casas de N: " + n.length);
        // for(int c=0; c<=5; c++){
        //     System.out.println("Na posição " + c + " temos o valor " + n[c]);
        // }
            // DE MANEIRA MAIS SIMPLES E INTELIGENTE

            // for(int c=0; c<n.length; c++){
            //     System.out.println("Na posição " + c + " temos o valor " + n[c]);
            // }

        // QUANTOS DIAS TEM O MES

        //  int tot[] = {31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31};
        //  String mes[] = {"Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"};
        // for( int c=0; c<mes.length; c++){
        //     System.out.println("O mes de " + mes[c] + " tem " + tot[c] + " dias");
        // }

        // FOREACH
        //double num[] = {3.5, 5, 1, 8, 4};
        //Arrays.sort(num); //bota o vetor em ordem
            // for (double valor: num){
            //     System.out.println(valor + " ");
            // }

        // int vet[] = {3, 7, 6, 1, 9, 4, 2};
        // int p = Arrays.binarySearch(vet, 1); //busca o valor dentro do vetor
        // for(int v:vet){
        //     System.out.println(v);
        // }
        //     System.out.println("Encontrei o valor na posição " + p);

        int v[] = new int[20];

        Arrays.fill(v, 0);
        for(int valor: v){
            System.out.print(valor + " ");
        }

    }
}
