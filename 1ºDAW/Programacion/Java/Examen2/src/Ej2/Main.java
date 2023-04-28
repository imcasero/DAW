
package Ej2;

/**
 *
 * @author diego
 */
public class Main {
    
    public static void main(String[] args) {
        int filas = 3;
        int col = 3;
        
        
        double[][] m = new double[filas][col];
        
        for (double[] m1 : m) {
            //Columnas
            for (int i = 0; i < m[0].length; i++) {
                //Filas
                m1[i] = i;
            }
        }
    }
    
    public static void imprimeSumaColumnas(double[][] m , int filas , int col){
        double[] suma = new double[col];
        
        for (int i = 0; i < col; i++) {
            for (int j = 0; j < filas; j++) {
                suma[i] =+ m[i][j];
            }
        }
        
        for (int i = 0; i < suma.length; i++) {
            System.out.println(suma[i]);
        }
    }
    
}
