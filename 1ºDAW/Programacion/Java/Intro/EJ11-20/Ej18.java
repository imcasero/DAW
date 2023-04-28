import java.util.Scanner;
public class Ej18{
	public static void main(String[] args) {
		Scanner reader = new Scanner(System.in);
		int contn = 0;

		for (int i= 0; i < 11; i++ ) {
			System.out.println("Introduzca un numero :");
			int num = reader.nextInt();

			if (num < 0) {
				contn++;
			}

		}
		System.out.println("Ha introducido " + contn + " numeros negativos. ");
	}
}