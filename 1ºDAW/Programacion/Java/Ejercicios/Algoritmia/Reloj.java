import java.util.Scanner;

public class Reloj {
  public static void main(String[] args) {
    // programa que imprime las horas y minutos
	// Formato: 12 horas  00:00 hasta 11:59
	for (int horas=0; horas<12; horas++) {
	   for(int minutos=0; minutos<60; minutos++) {
		   System.out.printf("%02d:%02d ",horas,minutos);
	   }
	}
  }
  
  
}
