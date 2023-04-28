import java.util.Scanner;
public class Maxmin{
	public static int Max (int a, int b){
		int max;
		if (a > b) {
			max = a;
		} else {
			max = b;
		}
		return max;
	}

	public static void main(String[] args) {
		Scanner rc = new Scanner(System.in);
		System.out.println("Introduzca el primer numero");
		int x = rc.nextInt();

		Scanner rc1 = new Scanner(System.in);
		System.out.println("Introduzca el segundo numero");
		int y = rc1.nextInt();

		int maximo = Max(x , y);

		System.out.println("El mayor valor es: " + maximo);
	}
}