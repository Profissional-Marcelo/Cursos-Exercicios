package ExercicioVetor;

import java.util.Scanner;

import javax.swing.DefaultListModel;

public class ExercicioVetor {
    public static void main(String[] args) {
      boolean c = true;
       do {

        int posicao = 0;
        int colecao[] = new int[posicao];
        DefaultListModel lista = new DefaultListModel<>();
        
        System.out.println("Bem vindo! Oque gostaria de fazer?");
        System.out.println("1 - Adicionar");
        System.out.println("2 - Remover");
        System.out.println("3 - Ordenar");
        System.out.println("4 - Sair");

        Scanner ss = new Scanner(System.in);
        int escolha = ss.nextInt();
        

        switch (escolha) {
            case 1:
                System.out.println("Escolha um número!");
                int numero = ss.nextInt();
                colecao[posicao] = numero;
                lista.removeAllElements();
                for (int contador = 0; contador < colecao.length; contador++){
                    lista.addElement(colecao[contador]);
                };
                break;
            case 2:
                System.out.println("Remover");
                break;
            case 3:
                System.out.println("Ordenar");
                break;
            case 4:
                c = false;
            default:
                System.out.println("Opção invalida");
                break;
        }
    } while (c == true);
    }
}
