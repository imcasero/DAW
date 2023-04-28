import java.util.Scanner;

/* SOLUCIÓN AL EJERCICIO: 
 Rellenar un array de 100 elementos con los números del 1 al 100 colocándolos
 en posiciones aleatorias
 
 (ver al final un nuevo ejercicio)
 
 */

// NOTAS sobre el algoritmo que hemos implementado

//  0  0  3  24  45  0  6  ...
// i = 70
// pos = 2  ¡ocupado!  -> buscar siguiente casilla libre en el array
//  0  0  3  24  45  70  6  ...
// i = 71
// pos = 5


//  99 % 100  99
//  100 % 100  0
//  101 % 100  1  ¡siempre en el intervalo 0 - 99 !!

public class Shuffle {

   

  public static void main(String[] args) {
    
	
	// creamos un objeto Scanner para leer por teclado
	Scanner lector = new Scanner(System.in);
	
	int[] suf = new int[100];  // índice va de 0 a 99
	int pos = 0;
	
	for(int i=1; i<=100; i++) {  // i: valor que queremos guardar
		
		pos = aleatorio(0, 99);  // posición aleatoria dentro del array
		while(suf[pos%100] != 0) {  // avanzar hasta que la posición esté vacía
			pos++;  // avanzamos una posición
		}			
		suf[pos%100] = i; // almacenamos el valor de i (1-100) en la posición
		
	}
	System.out.println();
    imprimeArray(suf);  // a ver qué hay...
	

  }
  
  public static void imprimeArray(int[] array) {
	  System.out.println();
	  for(int i=0; i<array.length; i++) {
		  System.out.print(array[i] + ",");
	  }
	  System.out.println();
  }
  
  public static int aleatorio(int inicio, int fin) {
	  int numerosEnRango = fin - inicio + 1; 
	  int randomNum = (int)(Math.random() * numerosEnRango) + inicio;
	  
	  return randomNum;
  }
}

/* EJERCICIO:
   Codifica un método que reciba un array de enteros y mezcle aleatoriamente 
   los elementos que contiene. 
   El método se declará como:
   public static void miShuffle( int[] array) {}
   
   Como ves, recibe un array que contendrá números y modificará dicho array,
   "barajando" los elementos de forma aleatoria.
   
   En un juego de cartas nos serviría para barajarlas antes de comenzar una
   mano. En una lista de canciones, nos permitiría establecer
   un orden aleatorio de reproducción.
*/