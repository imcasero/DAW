import java.util.Scanner;
public class Inversor{
	public static void main(String[] args) {
		int ac = 0;
		int resto = 0;
		 Scanner rc = new Scanner(System.in);

		 System.out.println("Introduzca un numero");
		 int i = rc.nextInt();
		 int copia = i;

		 while( i > 0 ){
		 	resto = i % 10;
		 	ac = ac *10 + resto;
		 	i = i / 10;
		}
		System.out.println(ac);

		if (copia == ac) {
			Sytem.out.println("Capicua");
		} else {
			System.out.println("No lo es");
		}
	}
}