import java.util.Scanner;

public class Ej13{
	public static void main(String[] args) {
		Scanner n = new Scanner(System.in);
		int mayor = 0;
		int num = 0;

		for(int i = 1; i < 11 ; i++){

			if (num > mayor) {
				mayor = num;

				System.out.println("Introduzca un numero");
				num = n.nextInt();
			}else{

				System.out.println("Introduzca un numero");
				num = n.nextInt();
			}

		}

		System.out.println(  mayor + "");
	}
}