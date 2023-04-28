package pruebaFicheros;
import java.io.*;
public class NewMain {
    public static void main(String[] args) {
        // TODO code application logic here
        try{
            FileReader entrada = new FileReader("C:/Users/Diego/"
                    +  "Desktop/Datos.txt");//Con esto accedemos al fichero
            int c=entrada.read();//Regoge el primer caracter
            char letra=(char)c;//Hacemos castir a char
            while(c!=-1){//Cuando devuelva -1 es que no existe un caracter
                System.out.print(letra);
                
                c=entrada.read();//leemos el caracter
                letra=(char)c;//Hacemos casting
            }
        }catch(IOException e) {
            System.out.println("No se puede acceder al fichero");
        } finally {
            
        }
    }
    
}
