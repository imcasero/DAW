import java.util.Scanner;
public class anidadosp{

	//1234
	//123
	//12
	//1
	
	public static void printNum(int i){
		for (int num = i; num > 0; num-- ) {
			for (int j = 1; j <= num ; j++ ) {
				System.out.print(j);
			}
			System.out.println(" ");
			
		}
}

	public static void main(String[] args) {
		Scanner rc = new Scanner(System.in);
		System.out.println("Introduzca un numero");
		int i = rc.nextInt();

		printNum(i);

	}
}

