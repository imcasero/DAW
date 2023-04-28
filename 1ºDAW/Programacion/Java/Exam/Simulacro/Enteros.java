import java.util.Scanner;
public class Enteros{
	public static void main(String[] args) {
		Scanner rc = new Scanner(System.in);

		int [] pos = new int[10];
		int i;

		for (i = 0; i < 10 ; i++ ) {
			System.out.println("Introduzca su numero " + (i + 1) + " :");
			pos[i] = rc.nextInt();
			System.out.println("===================================");
		}

		for ( i = 0; i <= 4; i++ ) {
			
				System.out.println(pos[i]);
				System.out.println(pos[9 - i]);
				System.out.println("============================");
			
		}
	}
}