/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package Ej8;
import java.util.Scanner;
/**
 *
 * @author diego
 */
public class Main {
    static Scanner rc = new Scanner(System.in);
    public static void main(String[] args) {
        System.out.println("Introduzca cuantas posiciones quiere desplazar el array");
        int pos = rc.nextInt();
        
        int array[] = {1 ,2 ,3 ,4};
        
       rotarDerecha(array , pos);
    }
    public static void rotarDerecha(int[] array, int posiciones) {

		int last = array.length-1;	
		
		posiciones = posiciones%array.length;  // �Qu� consigue esta l�nea? (no es imprescindible, pero...)
		for(int j=0; j<posiciones; j++) {  // rotamos "posiciones" veces
			// el siguiente c�digo provoca UNA rotaci�n a la derecha de los elementos del array
			int aux = array[last];
			for(int i=last; i>0; i--) {
				array[i]=array[i-1];
			}
			array[0]=aux;
		}
                for (int i = 0; i < array.length; i++) {
                    System.out.println(array[i]);
        }
		
	}
    
}
