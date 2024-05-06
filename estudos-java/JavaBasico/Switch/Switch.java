package Switch;

import java.util.Scanner;

public class Switch {
    public static void main(String[] args) {

        // Continue joga de volta ao começo do loop, ignorando oque está abaixo
        Scanner ss = new Scanner(System.in);            

        System.out.println("Quantas pernas?");
        int pernas = ss.nextInt();

        switch(pernas){
            case 1:
                System.out.println("Saci");
                break;
            case 2:
                System.out.println("Bi-pedal");
                break;
            case 3:
                System.out.println("Tricipal");
                break;
            case 4:
                System.out.println("Quadrupedal");
                break;
            case 6, 8:
                System.out.println("Aeronavegável");
                break;
            default:
                System.out.println("Invalido");
        }


        
    }
}
