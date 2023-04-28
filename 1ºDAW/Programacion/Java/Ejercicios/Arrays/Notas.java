import java.util.Scanner;
public class Notas{
	public static void main(String[] args) {
		int[] ind = new int[11];

		Scanner rc = new Scanner(System.in);
		for (int i = 0; i < ind.length ; i++ ) {
			System.out.println("Introduzca la una nota");
			int n = rc.nextInt();

			ind[n] = 1 + ind[n];
			
		}
		System.out.println("================================");

		for (int i = 0; i < ind.length ; i++ ) {
			System.out.println(ind[i] + " cantidad de " + i);
		}
	}
}