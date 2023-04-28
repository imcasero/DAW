public class Ej9 {

    public static void main(String[] args) {
        int i = 1;
        int resto = i % 2;
        var acumulador = 0;

        while (i < 11) {
            if (resto != 0) {
                acumulador = acumulador + i;
                i++;
            } else {
                i++;
            }
        }
        System.out.println( acumulador );
    }
}