import java.util.Scanner;
public class Adivinar{
	public static void main(String[] args) {
		Scanner rc = new Scanner(System.in);
		System.out.println("Introduzca el numero para adivinar");
		int e = rc.nextInt();

		int i = 0;
		Scanner rc1 = new Scanner(System.in);
		while ( i != e){
			System.out.println("Introduzca un numero");
			i = rc1.nextInt();

			if (i > e) {
				System.out.println("Te pasaste perro");
				
			} else if (e > i) {
				System.out.println("Te quedaste corto");
				
			}
		}

		System.out.println("Enhorabuena");
	}
}