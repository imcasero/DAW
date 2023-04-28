import java.util.Scanner;

public class Negativo{
	public static void main(String[] args) {
		Scanner rc = new Scanner(System.in);
		int num = 0;
		int ac = 0;
		int i;
		for ( i = 0; num >= 0 ;i++  ) {
		 	System.out.println("Introduzca un numero que no sea negativo :");
		 	num = rc.nextInt();
		 	if (num  > -1) {
		 		ac += num;	
		 	} else {
		 		i--;
		 	}
		 	
		 } 
		 int media = ac / i;
		 System.out.println("Esta es la media :" + media );
	}
}