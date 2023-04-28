package TableGenerator;
public class Generator {
    public static void main(String[] args) {
        System.out.println("<table>");
            for (int i = 0; i < 10; i++) {
                System.out.println("<tr>");
                for (int j = 0; j < 10; j++) {
                    System.out.println("<td>");
                    System.out.println("</td>");
                }
                System.out.println("</tr>");
        }
        System.out.println("</table");
    }
    
}
