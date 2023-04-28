import java.util.Scanner;

public class reloj{
	public static void main(String[] args) {
		for (int horas = 0; horas < 12; horas++ ) {
			for (int min = 0; min < 60;min++ ) {
				System.out.println("%02d:%02d",horas,min);
			}
		}
	}
}