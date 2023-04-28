public class ArrayNumeros {
	public static void main(String[] args) {
	
	//array de 100 enteros
	int[] numeros = new int[100];
	for(int i=1;i<=100; i=i){ // Que I no suba, debe subir al añadir numero
		int posicion = (int)(Math.random()*100);
		if (numeros[posicion] == 0){ // Si el contenido de la posion es 0...
			numeros[posicion]=i;
			i++; //aumenta
			}
		}
		
		for(int i=99; i>=0;i--){
			System.out.printf("%4d", numeros[i]);
			}
		}
	}