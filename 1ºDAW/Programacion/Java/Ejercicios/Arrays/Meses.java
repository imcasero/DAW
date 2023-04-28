import java.util.Scanner;
public class Meses{
	public static void main(String[] args) {
		String[] meses = new String("Enero" , "Febrero" , "Marzo" , "Abril" , "Mayo" , "Junio" , "Julio" , "Agosto" , "Septiembre" , "Octubre" , "Noviembre" , "Diciembre");

		Scanner num = new Scanner(System.in);
		System.out.println("Introduzca un mes");
		int i = num.nextInt();
		if (num < 12 && num > 0) {
			System.out.println(meses[i + 1]);
		} else {
			System.out.println("Error");
		}
	}
}