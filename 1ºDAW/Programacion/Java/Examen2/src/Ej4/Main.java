
package Ej4;



/**
 *
 * @author diego
 */
public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Coche c1 = new Coche();
        c1.nkilometros = 100;
        Coche c2 = new Coche();
	c2.nkilometros = 50;
	Furgoneta f1 = new Furgoneta();
	f1.nkilometros = 168;
	Furgoneta f2 = new Furgoneta();
	f2.nkilometros = 127;
        
        c1.arrancar();
    }
    
}
