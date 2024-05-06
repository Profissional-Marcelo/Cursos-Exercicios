package GalTolitTable;

public class GalToLitTable {
    public static void main(String args[]){
        double gallons, liters;
        int counter;

        counter = 0;

        for(gallons = 1; gallons <= 100; gallons++){
            liters = gallons * 3.7854; //converte galões para litros
            System.out.println(gallons + "quantidade de galões é igual a" + liters + "listros");
            counter++;

            if (counter == 10){
                System.out.println();
                counter = 0;
            }
         } 
    }
}
