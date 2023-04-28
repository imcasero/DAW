import java.util.*;

	class Ninos{
		static int cod; //como uiero acumularlo lo hago estatico
		String nombre;
		String apellido;
		boolean sexo;
		String fecha;
		int estatura;
		int peso;

		public  Ninos(int cod ,String nombre ,String apellido ,boolean sexo,String fecha ,int estatura ,int peso){
			this.nombre = nombre;
			this.apellido = apellido;
			this.sexo = sexo;
			this.fecha = fecha;
			this.estatura = estatura;
			this.peso = peso;
		}

	}
public class Pediatria{

	static int[] nenes = new int[100];//array para almacenar
	static int indice=0;//indice

	public static void main(String[] args) {

		System.out.println(""); //menu
		System.out.println("================================================");
		System.out.println("1. Dar de alta");
		System.out.println("================================================");
		System.out.println("2. Dar de baja");
		System.out.println("================================================");
		System.out.println("3. Listar ninos");
		System.out.println("================================================");
		System.out.println("4. Listar por apellido o nombre");
		System.out.println("================================================");
		System.out.println("5. Buscar por apellido");
		System.out.println("================================================");
		System.out.println("6. Buscar ninos en un rango de peso");
		System.out.println("================================================");
		System.out.println("7. Calcular percentil(mas bajo)");
		System.out.println("================================================");
		System.out.println("8. Calcular percentil de estatura de un nino");
		System.out.println("================================================");
		System.out.println("9. Calcular datos automaticos para pruebas");
		System.out.println("================================================");
		System.out.println("10. Salir de la aplicacion");
		System.out.println("================================================");
		System.out.println("");

		Scanner rc = new Scanner(System.in);
		System.out.println("Introduzca el numero para operar");
		int num = rc.nextInt();

		switch (num) {

		case 1:

			break;

		case 2:
			break;

		case 3:
			break;

		case 4:
			break;

		case 5:
			break;

		case 6:
			break;

		case 7:
			break;

		case 8:
			break;

		case 9:
			break;

		case 10:
			break;
			
		}

	}

}
