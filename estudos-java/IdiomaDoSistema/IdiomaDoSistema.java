package IdiomaDoSistema;

import java.util.Locale;

public class IdiomaDoSistema {
    public static void main(String[] args) {
        
        Locale linguagem = Locale.getDefault();
        System.out.println("O idioma do sistema é:");
        System.out.println(linguagem.getDisplayLanguage());

    }
    
}
