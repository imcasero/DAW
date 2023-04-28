import java.util.*;
public class Comparador{

public static boolean comp(int x[], int y[]) {
    if (x.length != y.length)
        return false;
    
    for (int n = 0; n < x.length; n++) {
        if (x[n] != y[n])
            return false;
    }
    
    return true;
}
public static void rev(int a1[]){
	int n = 0;
	int[] aux = new int[a1.length];
		for (int i = 0; i <a1.length ; i++ ) { //array auxiliar
			aux[i] = a1[i];
		}
		for (int i = a1.length-1; i >= 0 ; i-- ) {
			a1[n] = aux[i];
			n++;
		}

		for (int i = 0; i < a1.length ; i++ ) {
			System.out.println(a1[i]);
		}
}
public static char aMinusculas(char c){
	
	if (c >= 'A' && c <= 'Z') {
		c = (char)(c + 32);
	}
	return c;

}
public static char[] aMinusculas(char[] texto){
	char[] texto2 = new char[texto.length];
	char aux;

	for (int i = texto.length; i > 0 ; i++ ) {
		texto2[i] = aMinusculas(texto2[i]);	
	}
	return texto2;
}
		
	public static void main(String[] args) {
		int[] num = {1 , 2 , 3};
		int[] num2 = {1 , 4 , 3};
		char[] c1 = {'H' , 'O'  , 'L' , 'A'};
		char[] c2 = {'H' , 'O'  , 'L' , 'A' , 'P'};

		//boolean resul = comp(num , num2);
		//System.out.println(resul);

		//rev(num);

	}

}