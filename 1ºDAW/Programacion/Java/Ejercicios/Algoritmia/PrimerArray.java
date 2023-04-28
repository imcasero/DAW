import java.util.Scanner;
public class PrimerArray{
	public static void main(String[] args) {
		int[] numeros = new int[5]; //array con 5 posiciones
		Scanner reader = new Scanner(System.in);
		
		for (int i = 0; i < 5 ; i++ ) { //rellenamos array
			System.out.println("Introduzca un numero :");
			int num = reader.nextInt();
			numeros[i] = num;
			
		}
		for (int j = 4 ; j >= 0 ; j-- ) { //mostramos valores inversamentes
			System.out.println("Posiciones " + j +  ":" + numeros[j]); //posicion del contador j y sus valores
		}
		System.out.println("El tamaño del array es: " + numeros.length);
		prueba(); //funcion propia

		int doblado = doble(10); //dara el valor de 10 * 2
		System.out.println(doblado);
	}


public static void prueba() {
	System.out.println("Prueba"); //tiene que estar dentro del class si o si
}
public static int doble(int num){ //void = vacio , hay que poner lo uqe vayamos a devolver con el resul, por ejemplo int
	int resul = num*2;
	return resul;
}

}