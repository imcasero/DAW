package Simulacro1;
import java.util.*;

public class NewMain {
    public static void main(String[] args) {
        ArrayList <Double> num = new ArrayList<>();
        Scanner rc = new Scanner(System.in);
        Double n;
        for (int i = 0; i <= 31; i++) {
            System.out.println("Introduzca el numero :");
            n = rc.nextDouble();
            num.add(n);
        }
        Collections.sort(num);
        System.out.println(num);
    }
    
}
