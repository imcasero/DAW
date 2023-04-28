import java.util.*;
public class E4{
	public static void main(String[] args) {
		int nota;
		int i = 0;
		int media = 0;
		int max = 0;
		int[] frq = new int[11];

		Scanner rc = new Scanner(System.in);
		
		System.out.println("Introduzca la nota");
		nota = rc.nextInt();
		System.out.println("=====================");

		while(nota !=0){

			if(nota < 1 || nota > 10){

				System.out.println("Valor no valido");

			} else {

				i++;
				media += nota;

				if (nota > max) {

					max = nota;

				}

				frq[nota]++;

			}

			
			System.out.println("Introduzca la nota");
			nota = rc.nextInt();
			System.out.println("=====================");

		}

		media=media/i;

		System.out.println("La media es: " + media);
		System.out.println("El valor maximo es: " + max);
		System.out.println("El numero de notas introducidos ha sido: " + i);

		for (int x = 0; x < frq.length ; x++) {
			System.out.println("La frecuencia de la nota " + (x) + " ha sido de " + frq[x] );
		}
	}
}