package Simulacro4;

import java.io.*;

public class NewMain {
    public static void main(String[] args) {
        try {
            File f = new File("Datos.txt");//Crea el acceso al fichero atraves
            //de la ruta 
            if (f.exists() && f.canRead()) {
                FileReader fr = new FileReader(f);
                BufferedReader bf = new BufferedReader(fr);
                String linea = bf.readLine();
                int suma1 = 0;
                int suma2 = 0;
                int suma3 = 0;
                while (linea != null) {
                    System.out.println(linea);
                    linea = linea.trim();//retorna copia del strin sin espacios
                    //en blanco
                    String[] array = linea.split("\\s");//divide por lineas y se 
                    //lo pasa al string el //s divide por espacio

                    suma1 += Integer.parseInt(array[1]);
                    suma2 += Integer.parseInt(array[2]);
                    suma3 += Integer.parseInt(array[3]);

                    linea = bf.readLine();
                }
                System.out.println();
                System.out.printf("%3s $4d %4d %4d", "", suma1, suma2, suma3);
            } else {
                System.out.println("No se pudo abrir el fichero");
            }
        } catch (IOException e) {
        }
    }

}
