package CalculoAnos;

import java.util.Calendar;
import java.util.Scanner;

public class CalculoAnos {
    public static void main(String[] args) {

        Calendar calendar = Calendar.getInstance();
        Scanner ss = new Scanner(System.in);

        short anoNascimento;
        short mesNascimento;

        int anoAtual = calendar.get(Calendar.YEAR);
        int mesAtual = calendar.get(Calendar.MONTH);
        
        System.out.println("Qual ano você nasceu?");
        anoNascimento = ss.nextShort();

        System.out.println("Qual mês você nasceu?");
        mesNascimento = ss.nextShort();

        int idade = anoAtual - anoNascimento;

        if (mesAtual <= mesNascimento){
            idade = idade - 1;
        }

        System.out.println("Você tem: " + idade + " anos");
        
        

    }
    
}
