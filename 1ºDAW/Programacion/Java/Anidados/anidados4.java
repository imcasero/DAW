import java.util.Scanner;
public class anidados4{
	public static void main(String[] args) {
		/* pregunta un numero n al usuario e imprime
		un cuadrado con n*n asteristocs
		ejemplo n = 2
			*
			**
			***
			*/
		Scanner reader = new Scanner(System.in);

		System.out.println(" Numero n ");
		int n =reader.nextInt();
		
			

		for(int lin = 1; lin <= n; lin++ ){
			System.out.println(" ");
			for (int esp = n; esp != lin ; esp--) {
				System.out.print(" ");
			}
			for (int ast = 1; ast <= lin; ast++ ) {
				System.out.print("*");
			}
		}
	}
}