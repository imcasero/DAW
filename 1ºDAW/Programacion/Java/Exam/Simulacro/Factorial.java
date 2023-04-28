import java.util.Scanner;
public class Factorial{
	public static void main(String[] args) {
		Scanner rc = new Scanner(System.in);
		System.out.println("Introduzca su numero: ");
		int num = rc.nextInt();
		//int i = 1;
		int resul = 1;

		while ( num > 0 ) { //esta mal
			resul = resul * num;
			num--;
		}

		System.out.println("Este es su factorial " + resul);
	}
}