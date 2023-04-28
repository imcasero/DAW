import java.util.Scanner;

public class DesviacionAtipica{
	public static void main(String[] args) {
	
		Scanner rc = new Scanner(System.in);
		System.out.println("Introduzca el numero de asignaturas");
		int asignaturas = rc.nextInt();
		int suma = 0;
		int sumatorio = 0;

		int[] nota1 = new int[asignaturas];

		for (int i = 0; i < asignaturas ;  i++) {
			Scanner nt = new Scanner(System.in);
			System.out.println("Introduzca la nota del modulo" + (i + 1) + " :");
			int nota = nt.nextInt() ;
			suma += nota;
			nota = nota1[i]; 
		}

		int media = suma / asignaturas;
		System.out.println("La media es " + media);

		double[] suma2 =new double[asignaturas];
		for (int j = 0; j < asignaturas ; j++ ) {
			suma2[j] = nota1[j] - media;
			sumatorio += suma2[j];
		}

		double radicando = sumatorio / asignaturas;
		double desviacion = Math.sqrt(radicando);

		System.out.println(" La desviacion es: " + desviacion);
	}
}