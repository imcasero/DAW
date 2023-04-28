import java.util.*;
/*Ejercicio 1:
      Haz un programa que lea una cadena por ccnsola. A continuación, lee un carácter e informa al usuario 
	  de si el carácter está contenido en la cadena y su posición, o si no está.
	  
   Ejercicio 2: 
       Haz un programa que lea dos cadenas por ccnsola y las una o concatene en otra cadena.
	   Imprime el resultado.
	   
   Ejercicio 3:
       Asigna una palabra a tres cadenas de caracteres. Conviértelas a minúsculas. 
	   Ordénalas alfabéticamente e imprímelas por pantalla en orden.
	   
   Ejercicio 4: 
       Lee diez cadenas por consola y guárdalas en un array.  Imprime el contenido del array en orden inverso.
	   
   Ejercicio 5:
        Realiza un programa que utilice el método substring (los dos métodos que hay).
        */
/*
           Imprime la longitud de una cadena
        */
 
        /*
           Lee y convierte una cadena a mayúsculas.
        */
        
        /* Sustituye en una cadena el carácter 'c' por 'k' */
        
        /* Lee una cadena de al menos cinco caracteres y obtén la cadena que 
           va desde el elemento con índice
           1 (segundo carácter) hasta el penúltimo elemento de la cadena.
        */
        /* Comprueba si una cadena de texto comienza por "pre" y termina con 
           "mente"
        */
        
        /* Comprueba cuántas veces aparece la letra 'T' en una cadena que leas 
           por teclado SIN utilizar el método charAt().
        */
        
        /* Lee una cadena por teclado y comprueba si contiene 
           la cadena "Stan Lee" sin contemplar mayúsculas ni minúsculas.
        */
        
        /* Codifica un método que sustituya el carácter 'k' por 'c' 
           si la c va seguida de 'a', 'o' o 'u'
        */
        
        /* Codifica un método que sustituya el carácter 'k' por 'c' 
           si la c va seguida de 'a', 'o' o 'u' , ahora obviando si son 
           mayúsculas o minúsculas
        */

public class Strings{

   public static int compareTo(  String s1 , String s2){

      int len1 = s1.lenght();
      int len2 = s2.lenght();

      int limite = len1<len2? len1 : len2;

      int resta = 0;

      for (int i = 0; i < limite && resta == 0 ; i++ ) {
         int resta = s1.charAt(i)-s2.charAt(i);
         
      }

      if (resta == 0 && len1 != len2) {
         if (len1<len2) {
            resta=-1;
         } else 
         resta = 1;
      }
      return resta;
   }

   public static void main(String[] args) {
      
      /*Scanner rc = new Scanner(System.in);
      System.out.println("Introduzca una cadena");
      String cad =rc.nextLine();

      
      System.out.println("Introduzca la letra que desea buscar");
      String letra = String.valueOf(rc.next().charAt(0));


      System.out.println(cad.contains(letra));/*




   }
}