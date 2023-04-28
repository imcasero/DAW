//Programa que imprima 10 columnas los numeros enteros del 1 hasta el limite que especifique el usuario
import java.util.Scanner;

public class Columnas10{
	public static void main(String[] args) {
		Scanner lector = new Scanner(System.in);

		System.out.println("Introduce el numero maximo :");

		int mayor = lector.nextInt();
		int i = 0;
		int j = 0;

		while( i < mayor ){
			i++;
			j++;
			System.out.print( i + " " );
			if (j > 9) {
				System.out.println();
				j = 0;
			}
		};
	}
}

//otra forma es en el if dividir 
//el unico contador por el numero 
//de columnas y que se realiza si
// es igual a 0

//se puede hacer con for mas simple