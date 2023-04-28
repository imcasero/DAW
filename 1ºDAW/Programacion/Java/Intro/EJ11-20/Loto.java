

public class Loto{
	public static void main(String[] args) {
		

		for(int i=1; i <=6; i++){
			int num = (int) ( Math.random() * 9 ) + 1; //RAMDON 10 en logo
			System.out.print( num + " " );
		}
	}
}