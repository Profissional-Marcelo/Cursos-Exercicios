
import javax.swing.JOptionPane;

public class JanelasJava {
    public static void main(String[] args) {
// O null é o nome da janela

// O último é o icon
// JOptionPane.showMessageDialog(null, "Mensagem exibida no principal", "Titulo do bloco", JOptionPane.WARNING_MESSAGE);

// cria um input
//JOptionPane.showInputDialog(null, "Informe um número: ");


int n, pares=0, resto, impares=0, maisCem=0, qntN=0;
double s=0f, media;


do {


n = Integer.parseInt(JOptionPane.showInputDialog(null, "<html>Informe um número: <br><strong>(Valor 0 interrompe)</strong></html>")); 

// mostra como funciona a impressão
// JOptionPane.showMessageDialog(null, "Você digitou o valor: " + n);
resto = n % 2;
if (resto == 0){
    pares++;
}
if (n == 0){
    pares--;
    qntN--;
}
if (resto !=0){
    impares++;
}
if (n > 100){
    maisCem++;
}

qntN++;

s += n;


} while (n != 0);
    media = s / qntN; 


    JOptionPane.showMessageDialog(null, "<html>Resultado final <br><hr>" + "<br>Total de valores: " + s + "<br>Total de pares: " + pares + "<br>Total de impares: " + impares + "<br>Números maiores que cem: " + maisCem + "<br>Média dos valores: " + String.format("%.2f", media) + "</html>");




    // TOTAL DE VALORES
    // TOTAL DE PARES
    // TOTAL DE IMPARES
    // ACIMA DE 100
    //  MEDIA DOS VALORES
    }
}
