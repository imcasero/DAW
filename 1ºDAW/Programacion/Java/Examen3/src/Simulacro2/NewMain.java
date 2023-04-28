package Simulacro2;
import java.util.*;
public class NewMain {
    public static void main(String[] args) {
        HashMap<Integer, String> idn = new HashMap<>();
        Scanner rc = new Scanner(System.in);
        int cont=0;
        int id = 1;
        String name;
        while (id != 0){
            System.out.println("introduzca id y nombre");            
            id = rc.nextInt();
            if (id != 0) {
                rc.nextLine();
                name = rc.nextLine();
                idn.put(id , name);
                cont++;
            }
        }
        if (cont > 10) {
            for (int i : idn.keySet()) {
                System.out.println("Key :" + i + " Name :" + idn.get(i));
            }
        }
    }
    
}
