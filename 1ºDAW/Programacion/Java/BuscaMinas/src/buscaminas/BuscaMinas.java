
package buscaminas;
public class BuscaMinas {  
    public static void main(String[] args) {
        // TODO code application logic here
        int[][] tablero= new int[11][11];
        int cont=0;
        int x ,y;
        while(cont < 8){ //mientras que sea menor que 8 minas sigo colocando minas
            x=(int) (Math.random() * 9+1);//asigno valores random
            y=(int) (Math.random() * 9+1);
            if (tablero[x][y]!=10) {//si la celda escogida es 10 la relleno
                tablero[x][y]=10;
                cont++;
            }   
            int aux=0;
            
                tablero[x+1][y]++;//asigno contadores al rededor de la celda
                tablero[x+1][y+1]++;
                tablero[x+1][y-1]++;
                tablero[x-1][y]++;
                tablero[x-1][y-1]++;
                tablero[x-1][y+1]++;
                tablero[x][y+1]++;
                tablero[x][y-1]++;   
        }
        for (int i = 0; i < tablero.length; i++) {
            for (int j = 0; j < tablero.length; j++) {
                System.out.print(tablero[i][j] + " ");
            }
            System.out.println();
        }
    }
}
    

