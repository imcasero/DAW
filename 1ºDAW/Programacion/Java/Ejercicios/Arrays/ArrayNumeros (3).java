/* Lo que he pensado es que despues de crear el numero aleatorio compruebe
si en el array ya esta ese numero, si ese numero ya existe resto 1 al contador
para que ese paso por el bucle no cuente y si no existe meto el numero aleatorio generado
en la posicion que tocaba.
Para ver si el numero existe o no he creado un metodo en el que le paso el numero aleatorio 
y el array para que lo recorra y devuelva verdadero o falso dependiendo si lo encuentra 
en el array o no. Tambien le paso la variable posicion para que recorra el array solo hasta la posicion a
la que lo voy a añadir */



public class ArrayNumeros{
	
	public static boolean comprobacion(int num, int[] numero, int posicion) {
		boolean resul = true;
		for(int i=0; i<posicion && resul; i++) {
			if(num==numero[i]) {
				resul = false;
			} else {
				resul = true;
			}
		}
		return resul;
	}
	
	public static void main(String[] args) {
		int[] numero = new int[100];
		
		for(int i=0; i<100; i++) {
			int num = (int) (Math.random() * 100 + 1);
			if(comprobacion(num, numero, i)) {
				numero[i] = num;
			} else {
				i--;
			}
		}
		
		for(int i=0; i<100; i++) {
			System.out.printf("%4d", numero[i]);
		}
	}
}
