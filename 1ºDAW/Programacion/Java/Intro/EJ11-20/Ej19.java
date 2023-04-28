import java.util.Scanner;
public class Ej19{
	public static void main(String[] args) {
		int acumulador = 0;
		Scanner reader = new Scanner(System.in);
		for (int i = 0; i < 11 ; i++ ) {
			System.out.println("Introduzca un numero :");
			int num = reader.nextInt();
			if (acumulador > num) {
				break;
			}else{
				acumulador = num;
			}
		}
	}
}