import java.util.Scanner;
public class factorial{
	public static void main(String[] args) {
		Scanner rc = new Scanner(System.in);
		System.out.println("Introduzca un num");
		int num = rc.nextInt();
		int ac = 1;

		if (num == 1) {
			System.out.println("1");
		} else {
			while( num > 0){
				ac = ac * num;
				num--;
			}
		}

		System.out.println("Este es el factorial " + ac );

	}
}