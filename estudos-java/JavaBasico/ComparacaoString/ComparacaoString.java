public class ComparacaoString {

    public static void main(String[] args) {

        String nome1 = "Lucas";
        String nome2 = "Lucas";
        String nome3 = new String("Lucas");
        String res;
        String res2;
        res = (nome1==nome2)?"igual":"diferente";
        res2 = (nome1.equals(nome3))?"igual":"diferente";


        System.out.println(res);
        System.out.println(res2);

    }
}
