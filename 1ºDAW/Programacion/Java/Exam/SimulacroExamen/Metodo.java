import java.util.Scanner;
public class Metodo{

	public static void main(String[] args) {
		Scanner rc = new Scanner(System.in);
		System.out.println("Introduzca un numero");
		int num = rc.nextInt();
		System.out.println("====================");
		PrintNumbers(num);
	}

	public static void printNumbers(int filas){
		

			for (int j = filas; j != 0 ; j-- ) {
				System.out.println("");
						for (int i = j; i  != 0 ; i-- ) {
						System.out.print(i);
						

			}
		}
		} 
}

/* 
4321
321
21
1 
*/