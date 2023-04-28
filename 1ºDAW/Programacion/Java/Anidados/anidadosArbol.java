import java.util.Scanner;
public class anidadosArbol{

	
	
	public static void printNum(int num){
		int esp = num - 1;
		int ast = 1;
		
		for (int x = 0; x < num ; x++ ) {
			for (int y = 0; y<esp ; y++ ) {
				System.out.print(" ");
			}
			esp--;
			for (int z = 0 ; z<ast ; z++ ) {
				System.out.print("*");
			}
			ast = ast + 2;
			System.out.println("");
		}
			
		}


	public static void main(String[] args) {
		Scanner rc = new Scanner(System.in);
		System.out.println("Introduzca un numero");
		int i = rc.nextInt();

		printNum(i);

	}
}
 