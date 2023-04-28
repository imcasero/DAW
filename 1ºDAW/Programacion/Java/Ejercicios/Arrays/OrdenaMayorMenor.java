/* Ejercicio 1:
      Codifica el método 
	     public static void ordenaArraySeleccion(char[] caracteres){}
	  que ordena caracteres de mayor a menor. Realiza pruebas. */

import java.util.*;
public class OrdenaMayorMenor{

	public static void imprimeArray(int[] numbers) {
		for(int i: numbers) {
			System.out.print(i + " ");
		}
		System.out.println();
	}

	public static void ordenacion(int[] n){
		int max=0;
		int pos=0;
		
		boolean cambio=false;

		for(int i=0; i < n.length - 1; i++) {
			max = n[i];   //valor mínimo en esta iteración
			pos = i;      // anotamos su posición en el array
			for(int j=i+1; j < n.length; j++) {
				if( max < n[j]) {
					max = n[j];
					pos = j;
					cambio = true;
				}
			}
			if (cambio) {
				n[pos] = n[i];
				n[i] = max;
				cambio = false;
			} 
			
		}
	}

	public static void main(String[] args) {
		int[] numeros = {200, 3, 75, 0, 2, 38, 50, 100, 25, 95, -2};
		imprimeArray(numeros);
		
		ordenacion(numeros);
		imprimeArray(numeros);
	}
}