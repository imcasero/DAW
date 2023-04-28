import java.util.Scanner;
public class E1{
	public static void main(String[] args) {
		Scanner rc = new Scanner(System.in);
		int i = 0;
		int comp = 0;
		int acu = 0;
		int cont = 0;
		while( i >= 0 ){
			System.out.println("Introduca un numero no negativo");
			i = rc.nextInt();
			System.out.println("===============================");
			cont++;
			acu += i;
			
			if (i > comp) {
				comp = i;
			}
		}
		acu -= i;
		int media = acu / (cont - 1);
		System.out.println("Ha introducido " + (cont - 1) + " numeros positivos");
		System.out.println("La media es : " + media );
		System.out.println("El valor maximo ha sido :" + comp );
		System.out.println("===============================");
	}
}