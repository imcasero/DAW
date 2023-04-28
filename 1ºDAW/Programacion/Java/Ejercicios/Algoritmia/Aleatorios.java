/*
Mi idea es que un for rellene los datos, y luego otro compruebe si ese 
valor esta utilizado
Lo comprueba atravaes de un boolean que en caso de ser true es que se ha usado
si no sera falso y seguira
*/


public class Aleatorios{
	public static void main(String[] args) {
		int [] num = new int[100];
		boolean marca;
		int aleatorio = 0;


		for (int i = 0; i < 100  ; i++ ) { // for para rellenar datos aleatorios
			if (marca == false) { 
				
			
			aleatorio = Math.random()*99;


			for (int j = 0; j < 100 ; j++ ) {
				if (num[j] == aleatorio) {
					marca[j] = true;
				}
			}
			// me duele la cabeza XD

		}
		}
	}
}