import java.util.Scanner;

public class Barcos{
	public static void main(String[] args) {
		int submarinos = 2;
		int contdisp = 0;


		boolean casillas = false;
		boolean estadosub = false;


		int[] posiciones = new int[10];




		for (int i = 1; i<posiciones.length ; i++ ) { // for para introducir datos
			Scanner sc = new Scanner(System.in);
			System.out.println("Introduce 0 para agua y 1 para submarino");	
			posiciones[i] = sc.nextInt();

			if (posiciones[i] != 0 && posiciones[i] != 1) {
				System.out.println("No es un valor valido");
				break;
			} else if (posiciones[i] == 1) {
				if (submarinos == 0) {
					System.out.println("Te quedaste sin submarinos");
					break;
				} else {
					submarinos--;
					if (posiciones[i-1] == 1) {
						System.out.println("No puedes juntar dos submarinos seguidos");
						break;
					}
				}
			}
		}

		int contsub = 0;

		for (int j = 0; contsub < 2 ; j++ ) {
			Scanner disp = new Scanner(System.in);
			System.out.println("Dispare!!");
			int casilla = disp.nextInt();

			if (casilla > 10) {
				System.out.println("Ni al agua;");
				break;
				} else if (posiciones[casilla] == 1) {
					System.out.println("ENHORABUENA!!");
					contsub++;
				} 
					else if (posiciones[casilla] == 0) {
						System.out.println("Agua");
					}


		}
	}
}
