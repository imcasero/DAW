import java.util.Scanner;
public class Divisores{
	public static boolean Primo(int numero) {
		
		if (numero % 2 == 0) {
			return false; // numeros que no son primos claramente
		}

		for (int i = 2; i < numero ; i++ ) {
			if (numero % i == 0) {
				return false;
			}
		}
		return true; 

	}

	public static int Numerodiv (int numero) {

		int cont = 0;

		while (Primo(numero)){
			cont++;
		}

		return cont;
	}

	public static void main(String[] args) {
		Scanner rc = new Scanner(System.in);
		System.out.println("Introduzca un numero : ");
		int num = rc.nextInt();

		int np = Numerodiv(num);

		System.out.println("Su numero tiene esta cantidad de divisores primos :" + np );
	}
}