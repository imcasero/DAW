/* ORDENAR ARRAYS



*/
import java.util.Scanner;








public class OrdenaArrays {
	
	// método para imprimir un array de enteros
	public static void imprimeArray(int[] numbers) {
		for(int i: numbers) {
			System.out.print(i + " ");
		}
		System.out.println();
	}
	
	public static void ordenaArraySeleccion(int[] n) {
		int min;
		int pos;
		boolean cambio = false;
		for(int i=0; i < n.length - 1; i++) {
			min = n[i];   //valor mínimo en esta iteración
			pos = i;      // anotamos su posición en el array
			for(int j=i+1; j < n.length; j++) {
				if( min > n[j]) {
					min = n[j];
					pos = j;
					cambio = true;
				}
			}
			if (cambio) {
				n[pos] = n[i];
				n[i] = min;
				cambio = false;
			} 
			
		}
	}
	
	public static void ordenaArrayBurbuja(int[] n) {
        int aux;
		boolean ordenado = false;  // para averiguar si el array está ya ordenado y parar
		for(int i=0; i < n.length - 1 && ordenado==false; i++) {
			ordenado = true;
			for(int j=0; j < n.length - 1 -i; j++) {
				if( n[j] > n[j+1]) {
					aux = n[j];
					n[j] = n[j+1];
					n[j+1] = aux;
					ordenado = false; // se ha realizado un cambio en esta iteración
				}
			}
			
		}
	}
	
	
    public static void main(String [] args) {
        	
		Scanner lector = new Scanner(System.in);
		
		int[] numeros = {200, 3, 75, 0, 2, 38, 50, 100, 25, 95, -2};
		imprimeArray(numeros);
		
		// vamos a ordenar el array: método de selección
		// Referencia: 
		
		ordenaArraySeleccion(numeros);
		imprimeArray(numeros);
		
        int[] numeros2 = {200, 3, 75, 30, 2, 38, 50, 100, 25, 1};
		ordenaArrayBurbuja(numeros2);
		imprimeArray(numeros2);

	}
}


/* 
   Ejercicio 1:
      Codifica el método 
	     public static void ordenaArraySeleccion(char[] caracteres){}
	  que ordena caracteres de mayor a menor. Realiza pruebas.
	  
   Ejercicio 2:
      Codifica el método 
	     public static void ordenaArrayBurbuja(char[] caracteres){}
	  que ordena caracteres de mayor a menor. Realiza pruebas.
	  
   Ejercicio 3:
      Codifica el método:
	     public static boolean repetidos(int[] numeros) {}
	  que, sobre un array ordenado, nos dice si hay elementos repetidos o no.
	  
   Ejercicio 4:
      Codifica el método:
	     public static int busquedaBinariaNum(int[]numeros, int n) {}
	  que devuelve el índice o posición del número n si lo encuentra en el array ( -1 si no está). 
	  El array numeros está ordenado y tienes que implementar una búsqueda binaria: irás a la mitad
	  del array en la primera comparación y, si no está el número buscado, te moverás hacia la parte 
	  del array donde pueda estar el número buscado según éste sea mayor o menor que el elemento
	  que acabamos de comparar.
      
*/