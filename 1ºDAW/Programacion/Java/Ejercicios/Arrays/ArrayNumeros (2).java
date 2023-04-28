/* El algoritmo elegido por mi parte consiste en crear un array, una vez creado generar un número entero
	aleatorio y, una vez creado este, pasar a un bucle for que se va a encargar de recorrer las 100
	posiciones del array para asegurarse de que el número generado no forme ya parte del array.
	Sin embargo, lo verdaderamente importante es que en el bucle for que comprueba si el número está
	repetido, se genera otro número aleatorio si observa que efectivamente se trata de un número que ya
	forma parte del array. Una vez generado este nuevo entero, va a establecer como 0 el valor de "y", causando
	que el bucle for compruebe desde 0 si el nuevo número generado está a su vez repetido, de este modo me aseguro
	de que de este bucle for va a salir si o si un número no repetido.
	Hecho esto el número se introduce en el array y el bucle for principal vuelve a ejecutarse para la siguiente
	posición del array.
	Finalmente se imprime el array al completo.
	*/


public class ArrayNumeros {
	public static void main (String[]args) {
		int[] numeros = new int[100];
		for (int x = 0; x<100;x++){
			int rellenar = (int)(Math.random()+100+1);
			for (int y = 0; y<100; y++){
				if (numeros[y]==rellenar){
					rellenar = (int)(Math.random()*100+1);
					y = 0;
				}
			}
			numeros[x]=rellenar;
		}
		for (int z = 0; z<100;z++){
			System.out.printf("%4d", numeros[z]);
		}
	}
}