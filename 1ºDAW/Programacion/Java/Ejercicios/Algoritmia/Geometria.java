import java.util.Scanner;

public class Geometria{
	public static void main(String[] args) {


		System.out.println("1. Longitud circunferencia");
		System.out.println("=====================================");
		System.out.println("2. Area circulo");
		System.out.println("=====================================");
		System.out.println("3. Volumen cilindro");
		System.out.println("=====================================");
		System.out.println("4. Area rectangulo");
		System.out.println("=====================================");
		System.out.println("5. Volumen de un hexagono");
		System.out.println("=====================================");
		System.out.println("6 .Area poligono regular");
		System.out.println("=====================================");
		System.out.println("0 .Terminar");
		System.out.println("=====================================");


		Scanner rc = new Scanner(System.in);
		System.out.println("Introduzca el numero para operar");
		int num = rc.nextInt();


			
		switch(num){
			case 1:
				System.out.println("Longitud circunferencia");
					Scanner c1 = new Scanner(System.in);
					System.out.println("Introduzca el radio de la circurferencia");
					double radio = c1.nextDouble();

					double resulrp = radio * 3.14;
					double resul1 = resulrp * 2;
					System.out.println("La longitud de su circurferencia es :" + resul1);
				break;
			case 2:
				System.out.println("Area circulo");
					Scanner c2 = new Scanner(System.in);
					System.out.println("Introduzca el radio de la circurferencia");
					 radio = c2.nextDouble();

					double resulc = Math.pow(radio, 2);
					double resul2 = resulc * 3.14;
					System.out.println("El area de su circurferencia es :" + resul2);
				break;
			case 3:
				System.out.println("Volumen cilindro");
					Scanner c3 = new Scanner(System.in);
					System.out.println("Introduzca el radio de la circurferencia");
					 radio = c3.nextDouble();
					Scanner c32 = new Scanner(System.in);
					System.out.println("Introduzca la altura del cilindro");
					double altura = c32.nextDouble();

					double resul3= 3.14 * altura * (Math.pow(radio, 2));
					System.out.println("El volumen del cilindro es :" + resul3);
				break;
			case 4:
				System.out.println("Area rectangulo");
					Scanner c4 = new Scanner(System.in);
					System.out.println("Introduzca el primer lado");
					double lado1 = c4.nextDouble();

					Scanner c42 = new Scanner(System.in);
					System.out.println("Introduzca el primer lado");
					double lado2 = c42.nextDouble();

					double resul4 = lado1 * lado2;
					System.out.println("El area del rectangulo es :" + resul4);
				break;
			case 5:
				System.out.println("Volumen de un hexagono");
				break;
			case 6:
				System.out.println("Area poligono regular");
				break;
			case 0:
				System.out.println("Terminar");
				break;
			default :
				System.out.println("Numero no valido");
				break;
		}
	}
}