import java.util.*;

public class E5{
	public static void main(String[] args) {
		Scanner rc= new Scanner(System.in);
		System.out.println("Introduce frase: ");
		String frase = rc.nextLine();

		for (int i = frase.length()-1; i>=0 ; i-- ) {
			char c =frase.charAt(i);
			if (c != ' ') {
				System.out.print(c);
			}
		}
	}
}