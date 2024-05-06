package OperadoresLogicos;

public class OperadoresLogicos {

    public static void main(String[] args) {
        int x = 4, y = 7, z = 12;
        boolean r;
        
        // TIPOS TERNÁRIOS
        
        // ou exclusivo
        r = (x<y ^ y==z)?true:false;
        System.out.println(r);
        
        
        //String sit = ((idade>=16 && idade<18) || (idade>=70))? "Voto opcional" : "Voto obrigatório";

    }
}
