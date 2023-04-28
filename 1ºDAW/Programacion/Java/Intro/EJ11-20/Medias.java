import java.util.Scanner;
public class Medias{
	public static void main(String[] args) {
		Scanner reader = new Scanner(System.in);

		int pos = 0;
		int neg = 0;
		int contp = 0;
		int contn = 0;
		
		for(int cont = 0; cont < 11; cont++){

		System.out.println("Introduzca un numero :");
		int a =reader.nextInt();

		if (a < 0) {
			contn ++;
			neg += a;
		}else{
			contp++;
			pos += a;
		}
	}

	double median = neg / contn;
	double mediap = pos / contp;

	System.out.println("La media negativa es : " + median);
	System.out.println("La media positiva es : " + mediap);

	}

}