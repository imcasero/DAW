public class ArrayNumeros {

   public static void main(String[] args) {
	
     // array de 100 enteros
     int[] numeros = new int[100]; 
     for(int i=0; i<100; i++) {
		 numeros[i]=i+1;
	 }		 
	 
	 for(int i=99; i>=0; i--) {
		 System.out.printf("%d-%d ", numeros[i], i);
	 }
   }
}
	