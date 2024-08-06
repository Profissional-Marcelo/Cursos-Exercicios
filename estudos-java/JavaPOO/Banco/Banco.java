package JavaPOO.Banco;

public class Banco {
   public static void main(String[] args) {
      Conta b1 = new Conta();
      b1.setNumConta(1111);
      b1.setDono("Marcelo");
      b1.abrirConta("CC");
      b1.estadoAtual();

      Conta b2 = new Conta();
      b2.setNumConta(2222);
      b2.setDono("Joaquim");
      b2.abrirConta("CP");

      b1.estadoAtual();
      b2.estadoAtual();

   } 
}
