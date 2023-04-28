import java.util.Scanner;
public class E4{
	public static void main(String[] args) {
		Scanner rc = new Scanner(System.in);
		System.out.println("Indique la posicion de la serie fibonacci :");
		int i = rc.nextInt();
		int resul = NFibo(i);
		System.out.println("Este es el valor " + resul);
	}
	static int NFibo (int n){
		int[] pos = new int[n];
		
		
		int p = 0;
		int s = 1;
		int copia = 0;

		for (int j = 2; j != n ; j++ ) {
			copia = p + s;
			p = s;
			s = copia;
		}
		
		return copia;
	}

}
