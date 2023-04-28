import java.util.Scanner;
public class Anidados7{
	public static void main(String[] args) {
		Scanner rc = new Scanner(System.in);
		System.out.println("Introduzca un numero");
		int num = rc.nextInt();

		for (int i = num; i > 0 ; i-- ) {
			System.out.println();
			for (int j = num; j > 0 ; j-- ) {
				System.out.print(j);
			}
		}
	}
}