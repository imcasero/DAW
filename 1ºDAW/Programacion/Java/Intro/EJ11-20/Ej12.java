import java.util.Scanner;

public class Ej12{
	public static void main(String[] args) {
		int num = 1;
		Scanner i = new Scanner(System.in);

		do{
			
			System.out.println("Introduzca un numero distinto de 0");
			num = i.nextInt();

	} while (num!=0); 
	

	}
}