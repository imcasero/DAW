import java.util.Scanner; //para llamar al paquete y poder introduccir obejtos lectores

public class Ej10{
	public static void main(String[] args) {
		Scanner lector = new Scanner(System.in); //creamos el lector

		System.out.println("Introduce el primer numero :");
		int a = lector.nextInt();

		System.out.println("Introduce el segundo numero :");
		int b = lector.nextInt();

		System.out.println("Introduce el tercer numero :");
		int c = lector.nextInt();


		if (a > b) {
			int mayor1 = a ;
			int menor1 = b ;
		} else {
			int mayor1 = b ;
			int menor1 = a ;
		};




		if (mayor1 > c) {
			if (menor1 > c) {
				int mediano = menor1 ;
				menor1 = c ;
			} else {
				int mediano = c;
			};
		};

		


		System.out.println( "primer numero es: " + mayor1 +" ,segundo numero es:"+ mediano +" y el tercer numero es:"+ menor1 );
	}
}