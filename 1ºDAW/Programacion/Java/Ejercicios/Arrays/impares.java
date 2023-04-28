import java.util.Scanner;
public class impares {

	public static boolean Impar(int i){
		if (i % 2 == 0) {
			return true;
		} else {
			return false;
		}
	}

	public static void main(String[] args) {
		Scanner rc = new Scanner(System.in);

		int[] num = new int[15];

		for (int i = 0; i<num.length ; i++ ) {
			System.out.println("Introduzca numeros");
			num[i] = rc.nextInt();
		}
		System.out.println("=================================");

		for (int j = num.length-1; j >= 0 ; j-- ) {
			if (Impar(num[j]) == false) {
				System.out.println(num[j]);
			}
		}
	}
}