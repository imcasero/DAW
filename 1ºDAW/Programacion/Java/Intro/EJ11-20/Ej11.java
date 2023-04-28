import java.util.Scanner;

public class Ej11{
	public static void main(String[] args) {
		
		Scanner edad = new Scanner(System.in);
		System.out.println("Introduzca su edad: ");
		int i = edad.nextInt();

		if (i <= 18) {
			System.out.println("Menor de edad");	
		} else {
			if (i <= 65) {
			System.out.println("Mayor de edad");
			}else {
				System.out.println("Jubilado");
			}
		}
	}
}