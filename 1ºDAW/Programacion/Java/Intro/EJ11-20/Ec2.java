import java.util.Scanner;
public class Ec2{

public static void main(String[] args) {
	Scanner reader = new Scanner(System.in);

	System.out.println(" Coeficiente a: ");
	double a =reader.nextDouble();

	System.out.println(" Coeficiente b: ");
	double b =reader.nextDouble();


	System.out.println(" Coeficiente c: ");
	double c =reader.nextDouble();

	//calculando radicando
	double radicando = b*b - 4*a*c;

	if (radicando > 0) { //Si el radicando es mayor que 0 la resulve
		double resull1 =(-1*b + Math.sqrt(radicando))/(2*a);
		double resull2 =(-1*b - Math.sqrt(radicando))/(2*a);

		System.out.println(" Resultados : " + resull1 + " y " + resull2);
	} else if (radicando == 0){ //Si es 0 es mas simple
		double resull = (-1*b)/(2*a);
		System.out.println("Resultado es: " + resull);
	}else{ //si no, seria -0 entonces no se puede resolver
		System.out.println("La ecuacion no puede resolverse");
	}
}
}


