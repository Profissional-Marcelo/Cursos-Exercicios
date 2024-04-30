package ResolucaoTela;

import java.awt.Toolkit;
import java.awt.Dimension;

public class ResolucaoTela {
    public static void main(String[] args) {

        Toolkit tk = Toolkit.getDefaultToolkit();
        Dimension d = tk.getScreenSize();

        double largura = d.width;
        double altura = d.height;

        System.out.println("A resolução do seu sistema é:" + largura + " X " + altura);
    }
    
    

}
