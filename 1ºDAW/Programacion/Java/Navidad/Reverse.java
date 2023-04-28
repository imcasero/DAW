import java.util.Scanner;
public class Reverse{
	public static void main(String[] args) {
		int[] a1 = {1 ,2 ,3};
		int n = 0;
		for (int i = a1.length-1; i > 0 ; i-- ) {
			a1[n] = a1[i];
			n++;
		}

		for (int i = 0; i < a1.length ; i++ ) {
			System.out.println(a1[n]);
		}
	}
}