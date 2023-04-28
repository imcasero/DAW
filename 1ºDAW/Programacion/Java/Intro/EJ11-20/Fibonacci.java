public class Fibonacci{
	public static void main(String[] args) {
		int i = 0;
		int j = 1;
		int acumulador = 0;

		for (int cont = 0; cont < 11 ; cont++ ) {
			System.out.println( j );
			acumulador = j;
			j = j + i ;
			i = acumulador;
		}
	}
}
